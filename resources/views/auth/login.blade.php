@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="container">
    <div class="row ">
        <div class="m-modal-content small">
            @if ($errors->has('msg'))
                <div class="alert alert-warning">
                    {{ $errors->first('msg') }}
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
            @endif
            
            <div class="m-modal-body">
                <div class="m-modal-social-logins">
                    <br>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'github') }}" class="frm-button facebook material-button full" type="button">GitHub</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'bitbucket') }}" class="frm-button twitter material-button full" type="button">Bitbucket</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'google') }}" class="frm-button google material-button full" type="button">Google</a>
                    </div>
                </div>

                <div class="m-modal-seperator"><span>OR</span></div>

                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="frm-row">
                        <input class="frm-input" type="text" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="frm-row">
                        <input class="frm-input {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" type="submit">Login</button>
                    </div>
                </form>
                <div class="frm-row">
                    <div class="col-md-8 offset-md-4">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a><br>

                        <p class="txt-center">Don't you have an account yet? <a href="index4.html#" data-modal="registerModal">Register</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
