<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class PagesController extends Controller
{
    public function index()
    {
    	$category = Category::all();
    	$slide = Post::orderBy('created_at','desc')->get()->take(4);
    	$porpular = Post::inRandomOrder()->get()->take(4);
    	$posts = Post::orderBy('created_at','desc')->paginate(10);

    	return view('pages.index')->withCategories($category)->withSlides($slide)->withPosts($posts)->withPorpulars($porpular);
    }

    public function single($slug)
    {
    	$post = Post::where('slug',$slug)->first();
    	$slide = Post::orderBy('created_at','desc')->get()->take(4);
    	$pop = Post::inRandomOrder()->get()->take(3);
    	$porpular = Post::inRandomOrder()->get()->take(5);

    	return view('pages.single')->withPost($post)->withPorpulars($porpular)->withSlides($slide)->withPops($pop);
    }

    public function category($category)
    {
    	$category = Category::where('category',$category)->first();
    	$post = Post::where('category_id',$category->id)->paginate(10);
    	$porpular = Post::inRandomOrder()->get()->take(4);

    	return view('pages.category')->withPosts($post)->withCategory($category)->withPorpulars($porpular);
    }

    public function tag($slug)
    {
    	$current = Tag::where('name',$slug)->first();

    	$porpular = Post::inRandomOrder()->get()->take(4);

        $post = Post::whereHas('tags', function ($query) use($slug) {
                    $query->where('name', $slug);
                })
        	->orderBy('created_at','desc')
            ->paginate(10);
        if ($post->count() == 0) {
        	return redirect()->back();
        }

        return view('pages.tag')->withPosts($post)->withTagged($current)->withPorpulars($porpular);
    }

    public function contact()
    {
    	return view('pages.general.contact');
    }
}
