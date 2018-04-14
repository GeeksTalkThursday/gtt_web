@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Welcome to Geeks Talk Thursday</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="content">
                <div class="title m-b-md">
                    Get accessed to tech articles and tutorials from basic, intermediate to advance level of explanation
                </div>

                
            </div>
                    <a href="{{route('Posts.index')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>Read GTT articles</a>

                     

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

