<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use Storage;
use File;
use Yuansir\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\index;

class frontcontroller extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->paginate(15);
        return view('Posts.index')->withPosts($post);
    
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
        return view('Posts.show')->withPost($post);

    }
}
