@extends('layouts.admin')

<?php $titleTag = htmlspecialchars($post->title);?>

@section('title',$titleTag)

@section('content')

	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Details</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$post->title}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">
			
            <div class="row">
    
                  <div class="col-sm-6">
                    <div class="thumbnail row">
                      <img src="{{ asset('images/posts/'.$post->thumbnail) }}"  />
                    </div>
                  </div>

            </div>

						<h3>Details</h3>
						<p> {!! $post->body !!} </p>


						{{-- reviews --}}

            {{-- end reviews --}}

                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>At a glance</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                       
                          <div class="project_detail">

                            <p class="title">Category</p>
                            <p>{!! $post->category->category !!}</p>
                            <p class="title">Tags</p>
                            <div class="panel-body">
                              <ul class="tag-cloud">
                              @foreach($post->tags as $tag)
                                  <li><a href="#"><i class="fa fa-tags"></i> {{$tag->name}}</a> 
                                  </li>
                              @endforeach
                                  
                              </ul>
                          </div>
                          </div>

                          <br />
                          <h5 class="title">Added By</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href="#"> {!! $post->admin->name !!}</a>
                            </li>
                            
                          </ul>
                          <br />

                          <div class="text-center mtop20">
                             <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Delete</button>
                            <a href="{{route('post.edit',$post->slug)}}" class="btn btn-sm btn-warning">Edit Post</a>
                            <a href="{{route('post.index',$post->slug)}}" class="btn btn-block btn-primary">All Posts</a>
                          </div>
                        </div>

                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



  <!-- Small modal -->
                 

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">You're about to delete this post</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Proceed...</h4>
                          
                        </div>
                        <div class="modal-footer">
                          {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                          <form method="POST" action="{{ route('post.destroy',$post->slug) }}">
								<input type="hidden" name="_method" value="DELETE">
		                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-danger ">Delete Post</button>
							</form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->

@stop