
@extends('home')


@section('title', 'All Posts')


@section('content')
  
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <!--  <div class="card-header">Articles</div> -->

                <div class="right_col" role="main">
         
         <!--  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All Posts </h3>
              </div> -->

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Geeks Talk Thursday</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    {{-- <p>Simple table with project listing with progress and editing options</p> --}}

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <!-- <th style="width: 1%">#</th> -->
                          <th style="width: 20%">Post Title</th>
                          <th>Thumbnail</th>
                          <th>Category</th>
                          <th style="width: 20%">View</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                          <tr>
                            <!-- <td>{{$post->id}}</td> -->
                            <td>
                              <a>{{$post->title}}</a>
                              <br />
                              <small>{{date('M j, Y ',strtotime($post->created_at))}}</small>
                            </td>
                            <td>
                              <ul class="list-inline">
                             <li>
                                <img src="{{ asset('images/posts/'.$post->thumbnail) }}" width="80" class=" img-responsive" />
                              </li>
                                
                              </ul>
                            </td>
                            <td>{{$post->category->category}}</td>
                            <td>
                              
                              <a href="{{route('Posts.show',$post->slug)}}" class="btn btn-success btn-xs"><i class="fa fa-chevron-up"></i> View </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="pull-right">
                        <div class=" pagination">
              {!! $posts->links(); !!}
            </div>
                    </div>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

@endsection