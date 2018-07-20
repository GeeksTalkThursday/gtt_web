        @if(Request::is('login'))
            <style type="text/css">
                body, html{
                    background-color: black!important;
                    color: black;
                }
            </style>
        @endif

        <div class="m-modal-content small">
            <div class="m-modal-header">
                <h3 class="m-modal-title">Login</h3>
                @if(!Request::is('login'))
                    <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
                @endif
            </div>
            <div class="m-modal-body">
                <div class="m-modal-social-logins">
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'github') }}" class="frm-button facebook material-button full" type="button"><i class="fa fa-github"></i> GitHub</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'bitbucket') }}" class="frm-button twitter material-button full" type="button"><i class="fa fa-bitbucket"></i>  Bitbucket</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'google') }}" class="frm-button google material-button full" type="button"><img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/> Google</a>
                    </div>
                </div>

                <div class="m-modal-seperator"><span>OR</span></div>

                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="frm-row">
                        <input class="frm-input {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"  name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
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

                        <p class="txt-center">Don't you have an account yet? <a  data-modal="registerModal">Register</a></p>
                    </div>
                </div>
            </div>
        </div>