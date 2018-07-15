{{--                 <div class="m-modal-social-logins">
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'github') }}" class="frm-button facebook material-button full" type="button"><i class="fa fa-github"></i> GitHub</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'bitbucket') }}" class="frm-button twitter material-button full" type="button"><i class="fa fa-bitbucket"></i>  Bitbucket</a>
                    </div>
                    <div class="columns column-2">
                        <a href="{{ route('social.oauth', 'google') }}" class="frm-button google material-button full" type="button"><img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/> Google</a>
                    </div>
                </div> --}}

                  <div class="m-modal-social-logins">
                    <div class="col-xs-offset-1 col-xs-10">
                        <div class="col-xs-3">
                            <a href="{{ route('social.oauth', 'github') }}" class=" github " ><i class="fa fa-github"></i></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="{{ route('social.oauth', 'bitbucket') }}" class=" bitbucket " ><i class="fa fa-bitbucket"></i></a>
                        </div> 
                        <div class="col-xs-3">
                            <a href="{{ route('social.oauth', 'gitlab') }}" class="gitlab ">{{-- <i class="fa fa-gitlab"> --}}<img width="40px" src="{{asset('/img/gitlab.png')}}"></i></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="{{ route('social.oauth', 'google') }}" class=" google " ><img width="40px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/> </a>
                        </div>
                    </div>
                </div>