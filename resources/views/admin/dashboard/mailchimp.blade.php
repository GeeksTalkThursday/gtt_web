@extends('layouts.admin')

@section('title', 'Send Campaign')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Send Campaign</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Send Campaign, to subscription list</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @include('partials.message._message')
                      <form method="POST" action="{{ route('sendCompaign') }}"  data-parsley-validate > {{ csrf_field() }}

                      <div class="add_listing_info">
                            
                            <div class="form-group">
                                    <label class="label-title">Subject</label>
                                    <input type="text" name="subject" class="form-control" required>
                            </div>
                            {{-- <div class="form-group">
                                <label class="label-title">To</label>
                                <input type="email" name="to_email" class="form-control" required>
                            </div> --}}
                          {{--   <div class="form-group">
                                <label class="label-title">From</label>
                                <input type="email" name="from_email" class="form-control" required>
                            </div> --}}
                            <div class="form-group">
                                <label class="label-title">Message</label>
                                <textarea name="message" class="form-control" required></textarea>
                            </div>
                                         
                        </div> 

                        <div class="add_listing_info">
                            <input type="submit" value="Submit Listing" class="btn">
                        </div>   
                    </form>
                  </div>
                </div>
              </div>


            </div>


    </div>
  </div>
@stop