    @if(Request::is('register'))
        <style type="text/css">
            body, html{
                background-color: black!important;
                color: black;
            }
        </style>
    @endif
        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Register</h3>
                @if(!Request::is('register'))
                    <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
                @endif
            </div>
            <div class="m-modal-body">
                {{-- hii iko kwa login LREDy --}}
                {{--<div class="m-modal-social-logins">--}}
                    <br>
                    {{--<div class="columns column-2">--}}
                        {{--<a href="{{ route('social.oauth', 'github') }}" class="frm-button facebook material-button full" type="button"><i class="fa fa-github"></i> GitHub</a>--}}
                    {{--</div>--}}
                    {{--<div class="columns column-2">--}}
                        {{--<a href="{{ route('social.oauth', 'bitbucket') }}" class="frm-button twitter material-button full" type="button">--}}{{-- <i class="fa fa-bitbucket"></i> --}}{{-- Bitbucket</a>--}}
                    {{--</div>--}}
                    {{--<div class="columns column-2">--}}
                        {{--<a href="{{ route('social.oauth', 'google') }}" class="frm-button google material-button full" type="button"><img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/> Google</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="m-modal-seperator"><span>OR</span></div>--}}

                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="frm-row">
                        <input class="frm-input {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus type="text" placeholder="Name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="frm-row">
                        <input class="frm-input" type="text" {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="frm-row">
                        <input class="frm-input {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required="">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="frm-row">
                        <input class="frm-input" type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                    <div class="frm-row">
                        <div class="col-xs-4 ">
                            <input type="checkbox" name="subscribe" {{ old('subscribe') ? 'checked' : 'checked' }} id="cbx" style="display:none"> 
                            <label for="cbx" class="toggle"><span></span></label>  
                                     
                        </div>
                        <label for="password-confirm" class="col-xs-8 col-form-label text-md-right">Subscribe to our notifications</label>
                    </div>
                    <div class="frm-row">
                        <button class="frm-button material-button full" type="submit">Register</button>
                    </div>
                </form>
                <div class="frm-row">
                    <p class="txt-center">Do you already have an account? <a  data-modal="loginModal">Login</a></p>
                </div>
            </div>
        </div>