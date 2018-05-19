<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.layouts._head')
</head>

<body>
    
    <!-- header start -->
    @include('partials.layouts._top_nav') 
    <!-- header end -->


    <!-- Left sidebar menu start -->
    @include('partials.layouts._left_nav')
    <!-- Left sidebar menu end -->
    
    <!--Main container start -->
    <main class="main-container">
            
            @yield('content')

            <div class="overlay"></div>
            <section class="main-content">
                <div class="main-content-wrapper">
                    <div class="content-body">
                        <hr>
                        <h4 class="h4"> Popular Tags: </h4>
                        <p style="padding: 10px; margin:5px;">
                            @php
                                $len = count($tags_all);
                            @endphp
                            @foreach($tags_all as $key => $tag)
                                <a href="{{route('blog.tag',$tag->name)}}"><span class="tagged"> <button class="frm-button material-button">{{strtoupper($tag->name)}}</button> </span></a>
                                <span style="color: #E30025;">{{$key == $len - 1 ?'   ':' | '}}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </section>

    </main>
        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row white-color">
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <img style="width: 175px; height: auto" src="{{ asset('img/logo.png') }}" alt="">
                                <p>{{env('APP_NAME')}} is <b>Wakanda Community</b> for developers, Learn to</p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a class="wow fadeInUp animated" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="wow fadeInUp animated" href="https://github.com/GeeksTalk/gtt_web" data-wow-delay="0.4s"><i class="fa fa-github"></i></a></li>
                                    <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s"><i class="fa fa-slack"></i></a></li>
                                    <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s"><i class="fa fa-medium"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4 class="white-color">Geeks Talk Thursday</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-address" style="padding: 10px;">
                                    <li class="white-color"><i class="white-color fa fa-exclamation strong"> </i>About</li>
                                    <li class="white-color"><i class="white-color fa fa-terminal strong"> </i>Authors</li>
                                    <li class="white-color"><i class="white-color fa fa-users strong"> </i>Members</li>
                                    <li class="white-color"><i class="white-color fa fa-phone strong"> </i>Contact</li>
                                    <li class="white-color"><i class="white-color fa fa-shopping-cart strong"> </i>Tech Shop</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4 class="white-color">Community</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-address" style="padding: 10px;">
                                    <li class="white-color"><i class="white-color fa fa-newspaper-o strong"> </i>Posts</li>
                                    <li class="white-color"><i class="white-color fa fa-slack strong"> </i>Slack</li>
                                    <li class="white-color"><i class="white-color fa fa-twitter strong"> </i>Twitter</li>
                                    <li class="white-color"><i class="white-color fa fa-medium strong"> </i>Medium</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4 class="white-color">Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p >Get notification about coming tutorials and meetups.</p>
                                <form action="{{route('subscribe')}}" method="POST" data-parsley-validate>{{ csrf_field() }}
                                    <div class="input-group">
                                        <input class="form-control white-color" name="email" type="email" placeholder="E-mail ... " required="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="submit"><i style="font-size: 20px; padding: 6px;" class="fa fa-send"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> Coded and Maintained with <i class="fa fa-heart red"></i> by <a style="color: cyan;" target="_blank" href="http://www.appslab.co.ke">Apps:Lab KE</a> |  (C) {{date('Y')}} All rights reserved </span>
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="/" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-modal="registerModal" data-wow-delay="0.3s">Register</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-modal="loginModal" data-wow-delay="0.4s">Login</a></li>
                                <li><a class="wow fadeInUp animated" href="/contact" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>





    <!-- Register popup html source start -->
    @include('partials.layouts._reg')
    <!-- Register popup html source end ---->

    <!-- Login popup html source start -->
    @include('partials.layouts._login')
    <!-- Login popup html source end -->

    <!-- Newsletter popup html source start -->
    @include('partials.layouts._subscribe')
    <!-- Newsletter popup html source end -->

    <div class="overlay"></div>

    @include('partials.layouts._js')

    {!! Toastr::render() !!}

</body>

</html>