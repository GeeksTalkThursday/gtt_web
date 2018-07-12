<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Category;
use App\Post;
use App\Tag;
use Auth;
use Illuminate\Http\Request;
use Mail;
use View;
use Yuansir\Toastr\Facades\Toastr;

class PagesController extends Controller
{
    public function index()
    {

//        $category = Category::all();
        $slide = Post::with(['comments'])->orderBy('created_at', 'desc')->get()->take(4);
        $porpular = Post::with(['comments'])->inRandomOrder()->get()->take(4);
        $posts = Post::with(['comments'])->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.index')
            ->withCategories([])
            ->withSlides($slide)
            ->withPosts($posts)
            ->withPorpulars($porpular);
    }

    public function posts()
    {
        return $this->index();
    }

    public function single($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post) {
            return redirect('/');
        }
        $slide = Post::orderBy('created_at', 'desc')->get()->take(4);
        $pop = Post::inRandomOrder()->get()->take(3);
        $porpular = Post::inRandomOrder()->get()->take(5);

        if (Auth::check()) {
            $book = Bookmark::where('user_id', Auth::user()->id)->where('post_id', $post->id)->first();
            return view('pages.single')->withPost($post)->withPorpulars($porpular)->withSlides($slide)->withPops($pop)->withBook($book);
        }

        return view('pages.single')->withPost($post)->withPorpulars($porpular)->withSlides($slide)->withPops($pop);
    }

    public function category($category)
    {
    	$category = Category::where('category',$category)->first();
        if (!$category) {
            return redirect('/');
        }
    	$post = Post::where('category_id',$category->id)->paginate(10);
    	$data= [
    	    'count' =>count(Post::where('category_id',$category->id)->get()),
            'categories'=>Category::all(),
            'tags'=>Tag::all(),
        ] ;

    	return view('pages.category')
            ->withPosts($post)
            ->withCategory($category)
            ->withData($data);
    }

    public function tag($slug)
    {
        $current = Tag::where('name', $slug)->first();

        if (!$current) {
            return redirect('/');
        }

        $porpular = Post::inRandomOrder()->get()->take(4);

        $post = Post::whereHas('tags', function ($query) use ($slug) {
            $query->where('name', $slug);
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        if ($post->count() == 0) {
            return redirect()->back();
        }

        return view('pages.tag')
            ->withPosts($post)
            ->withTagged($current)
            ->withPorpulars($porpular);
    }

    public function search()
    {
        $key = \Request::get('qq');
        $post = Post::with('Category')->where('title', 'like', '%' . $key . '%')
            ->orWhereHas('Category', function ($q) use ($key) {
                $q->where('category', 'like', '%' . $key . '%');
            })
            ->paginate(10);
        if (!count($post)) {

            Toastr::warning('Search Results Returned nothing', $title = 'No Search Result', $options = ["progressBar" => true]);
            return redirect('/');
        }
        $porpular = Post::inRandomOrder()->get()->take(4);

        Toastr::success('Search results', $title = 'Search', $options = ["progressBar" => true]);

        return view('pages.search')->withPosts($post)->withSearched($key)->withPorpulars($porpular);
    }

    public function preSearch($key)
    {
        // $key = 'php';
        $post = Post::with('Category')->where('title', 'like', '%' . $key . '%')
            ->orWhereHas('Category', function ($q) use ($key) {
                $q->where('category', 'like', '%' . $key . '%');
            })
            ->take(6)->get();
        if (!count($post)) {
            return response()->json('nosearch');
        }
        return View::make('partials._search')->withPosts($post);
    }

    public function contact()
    {
        return view('pages.general.contact');
    }

    public function EmailContact(Request $request)
    {

        //validate data
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ));

        $name = $request->name;
        $content = $request->message;
        $email = $request->email;
        $subject = $request->subject;

        Mail::send('emails.contact', ['name' => $name, 'content' => $content, 'subject' => $subject], function ($message) use ($email, $name, $subject) {

            $message->from(env('MAIL_ACCOUNT'), $email);

            $message->to(env('MAIL_ACCOUNT'));

            $message->subject($name . ', ' . env('APP_NAME') . ' ' . 'Contact');

        });

        Toastr::success('Contact Message successfully sent', $title = 'Contact Email', $options = ["progressBar" => true]);

        return redirect()->back();

    }
}
