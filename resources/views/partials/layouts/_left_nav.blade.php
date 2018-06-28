<div class="sidebar">
        <div class="sidebar-wrapper">

            <!-- side menu logo start -->
            <div class="sidebar-logo">
                <a href="{{url('/')}}">
                    <img style="width: 75px; height: auto" src="{{ asset('img/1logo.png') }}" alt="">
                </a>
                <div class="sidebar-toggle-button">
                    <i class="material-icons">&#xE317;</i>
                </div>
            </div>
            <!-- side menu logo end -->

            <!-- showing on mobile screen sizes -->
            <!-- mobile menu start -->
            <div id="mobileMenu">
                <div class="sidebar-seperate"></div>
            </div>
            <!-- mobile menu end -->

            <!-- sidebar menu start -->
            <ul class="sidebar-menu">

                <li class="{{ Request::is('posts') ? "active" : "" }}">
                    <a href="{{url('/posts')}}" class="material-button">
                        <span class="menu-icon"><i class="fa fa-book"></i></span>
                        <span class="menu-label">Browse</span>
                    </a>
                </li>
                <li class="{{ Request::is('contact') ? "active" : "" }}">
                    <a href="{{url('/contact')}}" class="material-button">
                        <span class="menu-icon"><i class="fa fa-phone"></i></span>
                        <span class="menu-phone">Contact</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end -->

            <div class="sidebar-seperate"></div>
        @guest
            <ul class="sidebar-menu">
                <li><a><span class="menu-label">Log in with</span></a></li>
            </ul>
            <div class="sidebar-seperate"></div>

            <!-- sidebar menu start -->
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('social.oauth', 'bitbucket') }}" class="facebook material-button">
                        <span class="menu-label"><i class="fa fa-bitbucket"></i> Bitbucket</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('social.oauth', 'github') }}" class="twitter material-button">
                        <span class="menu-label"><i class="fa fa-github"></i> GitHub</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('social.oauth', 'google') }}" class="google-plus material-button">
                        <span class="menu-label"><img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/></i> Google </span>
                    </a>
                </li> 
            </ul>
        @endguest
            <!-- sidebar menu end -->
        </div>
    </div>