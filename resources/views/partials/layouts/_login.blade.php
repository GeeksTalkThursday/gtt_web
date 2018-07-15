        @if(Request::is('login'))
            <style type="text/css">
                body, html{
                    background-color: black!important;
                    color: black;
                }
            </style>
        @endif

        <div class="m-modal-content small">
            <div class="m-modal-header text-center">
                <h3 class="m-modal-title">Login with</h3>
                @if(!Request::is('login'))
                    <span class="m-modal-close"><i class="material-icons">&#xE5CD;</i></span>
                @endif
            </div>
            <div class="m-modal-body">
                @include('partials.layouts._social_auths')

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
                <div class="frm-row text-center">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a><br>

                        <p class="txt-center">Don't you have an account yet? <a href="index4.html#" data-modal="registerModal">Register</a></p>
                </div>
            </div>
        </div>