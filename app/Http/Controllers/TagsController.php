<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Yuansir\Toastr\Facades\Toastr;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::get();
        return view('admin.dashboard.tags.tags')->withTags($tag);
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
            'tag'=>"required|max:15|unique:tags,name",
        ));
        $tag = new Tag;
        $tag->name = $request->tag;
        $tag->save();

        Toastr::success('Tag successfully Added', $title = 'Tag', $options = ["progressBar"=>true]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'tag'=>"required|max:15|unique:tags,name,$id",
        ));
        $tag = Tag::findOrFail($id);
        $tag->name = $request->tag;
        $tag->save();

        Toastr::success('Tag successfully Edited', $title = 'Tag', $options = ["progressBar"=>true]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
