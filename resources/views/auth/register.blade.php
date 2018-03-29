@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->has('msg'))
                <div class="alert alert-warning">
                    {{ $errors->first('msg') }}
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class=" col-sm-12">
                        <div class="panel panel-default">
                            <p></p>
                            <div class="panel-heading text-center">Or Login</div>

                            <div class="panel-body text-center">
                                 <a style="text-decoration: none;  font-size: 30px; padding:10px 20px;" href="{{ route('login') }}" class="btn">
                                    <i class="fa fa-sign-in"></i>
                                </a>
                          {{--       <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary ">
                                    Login with Facebook
                                </a>
                                <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info ">
                                    Login with Twitter
                                </a> --}}
                                <a style="text-decoration: none; color: red; font-size: 30px; padding:10px 20px;" href="{{ route('social.oauth', 'google') }}" class="btn ">
                                     <i class="fa fa-google"></i>
                                </a>
                                <a style="text-decoration: none; color: #292C32; font-size: 30px; padding:10px 20px;" href="{{ route('social.oauth', 'github') }}" class="btn ">
                                     <i class="fa fa-github"></i>
                                </a>
                                  <a style="text-decoration: none; color: #4300AA; font-size: 30px; padding:10px 20px;" href="{{ route('social.oauth', 'bitbucket') }}" class="btn ">
                                    <i class="fa fa-bitbucket"></i>
                                </a>
                              {{--   <hr> --}}
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
