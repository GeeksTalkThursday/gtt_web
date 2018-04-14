@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Categories</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @include('partials.message._message')
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('category.store')}}"> {{ csrf_field() }}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="category" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{-- <button type="submit" class="btn btn-primary">Cancel</button> --}}
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Existing Categories  </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category Name</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($categories as $category)
                          <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->category}}</td>
                            <td class=" last">
                            <!-- Small modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category{{$category->id}}">Edit</button>
                            </td>

                            <div class="modal fade bs-example-modal-sm" id="category{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">

                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Edit Category</h4>
                                  </div>
                                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('category.update',$category->id)}}">
                                  <div class="modal-body">
                                    @include('partials.message._message')
                                    
                                      <input type="hidden" name="_method" value="PUT">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                                      <div class="form-group">
                                        <label class="control-label " for="first-name">Category Name <span class="required">*</span>
                                        </label>
                                        <div class="">
                                          <input type="text" id="first-name" name="category" value="{{$category->category}}" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                      </div>
                            
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>

                                  </form>

                                </div>
                              </div>
                            </div>
                            <!-- /modals -->
                          </tr>
                        @empty
                        <td>No Categories</td>
                        @endforelse
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


            </div>


    </div>
  </div>
@stop