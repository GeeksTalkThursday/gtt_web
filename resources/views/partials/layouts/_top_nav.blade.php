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
                    <a href="index.html" class="logo"></a>
                </h1>
            </div>
            <!--logo end -->

            <div class="header-menu">

                <!-- header left menu start -->
                <ul class="header-navigation" data-show-menu-on-mobile>
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle">HOME</a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="index.html">Home demo 1</a></li>
                                <li><a href="index2.html">Home demo 2</a></li>
                                <li><a href="index3.html">Home demo 3</a></li>
                                <li><a href="index4.html">Home demo 4</a></li>
                                <li><a href="index5.html">Home demo 5</a></li>
                                <li><a href="index6.html">Home demo 6</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle">POSTS</a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="list-timeline.html">List timeline</a></li>
                                <li><a href="list-two-column.html">List column 2</a></li>
                                <li><a href="list-three-column.html">List column 3</a></li>
                                <li><a href="detail-standart.html">Detail standart</a></li>
                                <li><a href="detail-parallax.html">Detail parallax</a></li>
                                <li><a href="detail-with-large-adbox.html">Detail adbox 1</a></li>
                                <li><a href="detail-with-slim-adbox.html">Detail adbox 2</a></li>
                                <li><a href="detail-left-sidebar.html">Left sidebar</a></li>
                                <li><a href="detail-left-sidebar-adbox.html">Left sidebar adbox</a></li>
                                <li><a href="detail-full-width.html">Full width</a></li>                                
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle">VIDEO</a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="video-standart.html">Video standart</a></li>
                                <li><a href="video-iframe.html">Video iframe</a></li>
                                <li><a href="video-custom-player.html">Video custom player</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="index4.html#" class="material-button submenu-toggle">EXTRA PAGES <i class="material-icons">&#xE313;</i></a>
                        <div class="header-submenu">
                            <ul>
                                <li><a href="authors.html">Authors</a></li>
                                <li><a href="author-posts-1.html">Author posts-column</a></li>
                                <li><a href="author-posts-2.html">Author posts-timeline</a></li>
                                <li><a href="about-us.html">About us</a></li>
                                <li><a href="privacy-policy.html">Privacy policy</a></li>                               
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="error.html">Error</a></li>
                            </ul>
                        </div>
                    </li>
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