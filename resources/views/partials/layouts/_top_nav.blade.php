<header class="header">
        <div class="header-wrapper">

            <!--sidebar menu toggler start -->
            <div class="toggle-sidebar material-button">
                <i class="material-icons">&#xE5D2;</i>
            </div>
            <!--sidebar menu toggler end -->


            <!--logo start -->
            <div class="logo-box">
                <h1>
                    <a href="{{url('/')}}" style="text-decoration: none" class="logo">
                        <img style="width: 95px; height: auto" src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </h1>
            </div>
            <!--logo end -->
            <div class="header-menu">
                <ul class="header-navigation" data-show-menu-on-mobile>
                    <li><a href="{{ url('/') }}">
                            <h3>GeeksTalkThursday</h3>
                        </a></li>
                    <li>
                        <a href="{{ url('/') }}#" class="material-button submenu-toggle"><h3>Tutorials</h3></a>
                        <div class="header-submenu">
                            <ul>
                                @foreach(\App\Category::all()->sortBy('category') as $item)
                                    <li><a href="{{route('blog.category', str_slug($item->category))}}"><i class="fa fa-code"></i> {{ strtoupper($item->category) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-menu">

                <!-- header left menu start -->
                <ul class="header-navigation" data-show-menu-on-mobile>
                </ul>
            </div>
            <div class="header-right with-seperator">

                <!-- header right menu start -->
                <ul class="header-navigation">
                    <li>
                        <a href="index4.html#" class="material-button search-toggle"><i class="material-icons">&#xE8B6;</i></a>
                    </li>
                @guest
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">Account</span></a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="index4.html#" data-modal="loginModal">Login</a></li>
                                <li><a href="index4.html#" data-modal="registerModal">Register</a></li>
                            </ul>
                        </div>
                    </li>

                @else
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle"><i class="material-icons">&#xE7FD;</i> <span class="hide-on-tablet">{{ Auth::user()->name }}</span></a>
                        <div class="header-submenu">
                            <ul>
                                <li class="{{ Request::is('saved-blog') ? "active" : "" }}"><a href="{{url('/saved-blog')}}">Saved Posts</a></li>
                                <li>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endguest


                    <li class="hide-on-mobile1"><a href="index4.html#" class="material-button" data-modal="newsletterModal"><i class="material-icons">&#xE0E1;</i></a></li>
                </ul>
                <!-- header right menu end -->

            </div>

            <!--header search panel start -->
            <div class="search-bar">
                <form class="search-form" method="get" data-parsley-validate action="{{url('search')}}" > @csrf 
                    <div class="search-input-wrapper">
                        <input type="text" name="qq" id="search" placeholder="search something..." class="search-input" required="" autocomplete="off">
                        
                        <button type="submit" class="search-submit"><i class="material-icons">&#xE5C8;</i></button>
                    </div>
                    <span class="search-close search-toggle">
                        <i class="material-icons">&#xE5CD;</i>
                    </span>
                </form>
                <span id="presearch">
                            
                </span>
                
            </div>
            <!--header search panel end -->

        </div>
    </header>