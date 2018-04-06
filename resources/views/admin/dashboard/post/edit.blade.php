@extends('layouts.admin')

<?php $titleTag = htmlspecialchars($post->name);?>

@section('title',$titleTag)

@section('content')

      
    @include('partials._cropper')

    @include('partials._tinymce')

    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit post</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">

			<div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add post <small>with details</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @include('partials.message._message')
                    <form action="{{route('post.update',$post->slug)}}" method="POST" class="form-horizontal form-label-left" data-parsley-validate > 
                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Name<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="title" required="">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="category_id" class="form-control">
                              <option value="{{ $post->category->id }}">{{ $post->category->category }}</option>
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                          <label>Details</label>
                          <textarea name="details" class="form-control" value="{{ old('details') }}">{{ $post->body }}</textarea>
                      </div>

                     <div class="row">  
                                <div class="col-sm-8 col-sm-offset-2">
                                    
                                    <div class="row">
                          <label class="label-title">Thumbnail (optional)</label><br>
                            <div class="col-md-6">
                                                                
                                
                                <input type="file" id="fileImage-three"  class="form-control" accept="image/*"  />
                             </div>
                                
                            <div class="col-md-6">
                              <div class="col-xs-6">
                                  <input type="button" class="btn btn-default btn-sm" id="btnCrop-three" value="Crop" />
                              </div>
                              <div class="col-xs-6">
                                  <input type="button" class="btn btn-default btn-sm" id="btnRestore-three" value="Restore" />
                                </div>                                                                 
                            </div>  
                            <br class="clearfix"><br>
                           
                            <div class="col-md-4 ">
                                <div>
                                  <canvas id="canvas-three">
                                    Your browser does not support the HTML5 canvas element.
                                  </canvas>
                                </div>
                            </div>      

                            <div class="col-md-4" id="result-three">
                              <span class="pull-right">Cropped Logo</span>
                            </div>

                            <div class="col-md-4">
                                <img src="{{ asset('images/posts/'.$post->thumbnail) }}">
                            </div>
                            
                                                    
                        </div>
                                </div>
                                
                            </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          {{-- <button type="submit" class="btn btn-primary">Cancel</button> --}}
                          <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

        </div>
       </div>
      </div>

@stop