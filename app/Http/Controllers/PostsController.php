<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use Storage;
use File;
use Yuansir\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->paginate(15);
        return view('admin.dashboard.post.index')->withPosts($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        $tag = Tag::get();
        return view('admin.dashboard.post.create')->withCategories($category)->withTags($tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'details' => 'required',
                'category_id' => 'required|integer',
                'thumbnail' => 'sometimes',
            ));

            //store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = str_slug($request->title, $separator = '-').'-'.date('mjYHi') ;
        $post->category_id = $request->category_id;
        $post->body = $request->details;

        $post->admin_id = Auth::guard('admin')->user()->id;

        if (!$request->thumbnail == null) {
            $data = $request->thumbnail;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= str_slug($request->title, $separator = '-').date('His').'.png';
            $path = public_path() . "/images/posts/" . $image_name;
            file_put_contents($path, $data);

           $post->thumbnail = $image_name;
        }

        $post->save();

        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());
        }

        Toastr::success('New Post successfully saved', $title = 'Added Post', $options = ["progressBar"=>true]);

        return redirect()->route('post.show',$post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('admin.dashboard.post.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $category = Category::get();
        $tag = Tag::get();
        return view('admin.dashboard.post.edit')->withPost($post)->withTags($tag)->withCategories($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'details' => 'required',
                'category_id' => 'required|integer',
                'thumbnail' => 'sometimes',
            ));

            //store in the database
        $post = Post::where('slug',$slug)->first();;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->details;

        $post->admin_id = Auth::guard('admin')->user()->id;

        if (!$request->thumbnail == null) {
            $data = $request->thumbnail;
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $image_name= str_slug($request->title, $separator = '-').date('His').'.png';
            $path = public_path() . "/images/posts/" . $image_name;
            file_put_contents($path, $data);

            if(!$post->thumbnail == null){
                $oldFilename = $post->thumbnail;
                $filename1 = public_path().'/images/post/'.$oldFilename;
               \File::delete($filename1);
           }

           $post->thumbnail = $image_name;
        }

        $post->save();

        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());
        }


        Toastr::success('New Post successfully saved', $title = 'Added Post', $options = ["progressBar"=>true]);

        return redirect()->route('post.show',$post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
         //
        $post = Post::where('slug',$slug)->first();


        $imagename = public_path().'/images/posts/'.$post->thumbnail;
        \File::delete($imagename);

        $post->delete();

        // Session::flash('success', 'Listing was successfully deleted!');
        Toastr::error('Post Deleted', $title = 'Delete Post', $options = ["progressBar"=>true]);

        return redirect()->route('post.index');
    }
}
