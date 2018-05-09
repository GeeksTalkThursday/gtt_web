<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookmark;
use App\Post;
use App\User;
use Yuansir\Toastr\Facades\Toastr;
use Auth;

class BookmarksController extends Controller
{
    public function bookmark($id)
    {
    	if (!Auth::check()) {
    		return response()->json('login');
    	}

    	$book = Bookmark::where('user_id',Auth::user()->id)->where('post_id',$id)->first();
    	if ($book) {
    		$book->delete();
    		if ((bool)$book) {
    			return response()->json('debooked');
    		}
    	}

    	$book = Bookmark::create([
    		'post_id' => $id,
    		'user_id' => Auth::user()->id,
    		'activated' => 1
    	]);

    	if ((bool)$book) {
    		return response()->json('booked');
    	}
    }

    public function saved()
    {
    	$book = Bookmark::with('post')->where('user_id',Auth::user()->id)->paginate(10);
    	if (!$book) {
    		Toastr::info('No Saved posts', $title = 'Search', $options = ["progressBar"=>true]);
    		return redirect()->back();
    	}
    	
    	// $post = Post::where('id',$->id)->paginate(10);
    	$porpular = Post::inRandomOrder()->get()->take(4);

    	return view('pages.bookmark')->withBooks($book)->withPorpulars($porpular);
    }
}
