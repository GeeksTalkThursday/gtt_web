@extends('home')

<?php $titleTag = htmlspecialchars($post->title);?>

@section('title',$titleTag)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Geeks Talk Thursday Articles</div>
	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title"> -->
              <div class="title_left">
                <!-- <h3>Product Details</h3> -->
              </div>

              
            </div>

            <div class="clearfix"></div>
            <h5 class="title">written By</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href="#"> {!! $post->admin->name !!}</a>
                            </li>
                            
                          </ul>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 >{{$post->title}}</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">
			
            <div class="row">
    
                  <div class="col-sm-6">
                    <div class="thumbnail row" align="center">
                      <img src="{{ asset('images/posts/'.$post->thumbnail) }}"  />
                    </div>
                  </div>

            </div>


						<!-- <h3>Details</h3> -->
						<p> {!! $post->body !!} </p>


						{{-- reviews --}}

            {{-- end reviews --}}

                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <!-- <div class="x_title">
                          <h5><i>At a glance</i></h5>
                          <div class="clearfix"></div>
                        </div> -->
                        <div class="panel-body">
                       
                          <div class="project_detail">

                            <p class="title"><b><u>Category</u></b></p>
                            <i><p>{!! $post->category->category !!}</p></i>
                            <u><b><p class="title">Tags</p></b></u>
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
                          
                          <br />

                          <div class="text-center mtop20">
                             
                    
                            <a href="{{route('post.index',$post->slug)}}" class="btn btn-block btn-primary">Back to Home</a>
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
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->



  <!-- Small modal -->
                 


@stop