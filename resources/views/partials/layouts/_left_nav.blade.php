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
                <li class="{{ Request::is('/') ? "active" : "" }}">
                    <a href="{{url('/')}}" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu-label">Home</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE038;</i></span>
                        <span class="menu-label">Videos</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('posts') ? "active" : "" }}">
                    <a href="{{url('/posts')}}" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE0BF;</i></span>
                        <span class="menu-label">Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('contact') ? "active" : "" }}">
                    <a href="{{url('/contact')}}" class="material-button">
                        <span class="menu-icon"><i class="material-icons">&#xE866;</i></span>
                        <span class="menu-label">Contact</span>
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
                        <span class="menu-label"><i class="fa fa-google"></i> Google </span>
                    </a>
                </li> 
            </ul>
        @endguest
            <!-- sidebar menu end -->
        </div>
    </div>