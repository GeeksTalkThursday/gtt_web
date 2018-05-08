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
                    <a href="{{url('/')}}" class="logo"></a>
                </h1>
            </div>
            <!--logo end -->

            <div class="header-menu">

                <!-- header left menu start -->
                <ul class="header-navigation" data-show-menu-on-mobile>
                    {{-- <li>
                        <a href="#" class="material-button ">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="material-button ">POSTS</a>
                    </li>
                    <li>
                        <a href="#" class="material-button ">VIDEO</a>
                    </li>
                    <li>
                        <a href="#" class="material-button ">EXTRA PAGES</a>
                    </li> --}}
                </ul>
                <!-- header left menu end -->

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
                                <li><a href="#">Profile</a></li>
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


                    <li class="hide-on-mobile"><a href="index4.html#" class="material-button" data-modal="newsletterModal"><i class="material-icons">&#xE0E1;</i></a></li>
                </ul>
                <!-- header right menu end -->

            </div>

            <!--header search panel start -->
            <div class="search-bar">
                <form class="search-form">
                    <div class="search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="search-input">
                        <button type="submit" name="search" class="search-submit"><i class="material-icons">&#xE5C8;</i></button>
                    </div>
                    <span class="search-close search-toggle">
                        <i class="material-icons">&#xE5CD;</i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->

        </div>
    </header>