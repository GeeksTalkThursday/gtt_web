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

    {{-- awesome hii tempalte ni wazuri sana, ata wametupa common tag place main staff zime anza --}}

    <!--Main container start -->
    <main class="main-container" style="margin-bottom: 30px;">
            
            @yield('content')

            <div class="overlay"></div>
            <section class="main-content">
                <div class="main-content-wrapper">
                    <div class="content-body">
                        <h4 class="h4"> Tags: </h4>
                        <p style="padding: 10px; margin:5px;">
                            @php
                                $len = count($tags_all);
                            @endphp
                            @foreach($tags_all as $key => $tag)
                                <a href="{{route('blog.tag',$tag->name)}}" style="padding: 5px; text-decoration: none;" class=""><span class="tagged"> {{$tag->name}} </span></a>
                                <span style="color: #E30025;">{{$key == $len - 1 ?'   ':' | '}}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </section>

    </main>



{{-- Footer html source start--}}
    {{--@include('partials.layouts._footer')--}}
    {{-- Footer html source end--}}

   {{--  <footer class="footer" >
        <div class="main-content">
            <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">{{env('APP_NAME')}}</h3>
                    <h5 class="light regular light-white">Share code.</h5>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <div class="row opening-hours" style="padding: 10px;">
                        <h3>About {{env('APP_NAME')}}</h3>
                        <p>our about here</p>
                    </div>
                </div>
            </div>
            <div class="row bottom-footer text-center-mobile">
                <div class="col-sm-8">
                    <p>&copy; {{date('Y')." ".env('APP_NAME')}} | Powered By <a style="color:cyan; text-decoration: none;" href="http://www.appslab.co.ke" target="_blank">App:Lab KE</a></p>
                </div>
                <div class="col-sm-4 text-right text-center-mobile">
                    <ul class="social-footer">
                        <li><a target="_blank" href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-bitbucket"></i></a></li>
                        <li><a target="_blank" href="http://www.twitter.com/appslab"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://github.com/GeeksTalk/gtt_web"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </footer> --}}



    <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <img src="{{asset('/img/logo-mono.png')}}" alt="" width="200" class="wow pulse" data-wow-delay="1s">
                                <p style="color: #2A2A2A;">{{env('APP_NAME')}} is a code sharing platform.</p>
                                <ul class="footer-address">
                                    <li><i class="fa fa-map-marker strong"> <span style="padding-left: 16px;"> Eldoret KE</span></i></li>
                                    <li><i class="fa fa-envelope strong"> <span style="padding-left: 10px;">gtt@appslab.co.ke</span></i></li>
                                    <li><i class="fa fa-phone strong"> <span style="padding-left: 10px;">+254 704407117</span></i>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="/">Home</a>  </li> 
                                    <li><a href="/login">Login</a>  </li> 
                                    <li><a href="/register">Register </a>  </li> 
                                    <li><a href="/posts">Posts</a></li> 
                                    <li><a href="/contact">Contact </a></li> 
                                    {{-- <li><a href="/about-us">About Us</a>  </li>  --}}
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Porpular</h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-blog">

                                @foreach($posts as $post)
                                    <li>
                                        <div class="col-md-5 col-sm-5 col-xs-5 blg-thumb p0">
                                            <a href="{{route('blog.single', $post->slug)}}">
                                                <img src="{{ asset('images/posts/'.$post->thumbnail) }}">
                                            </a>
                                            <span class="blg-date">{{ date('d-m-Y',strtotime($post->created_at)) }}</span>

                                        </div>
                                        <div class="col-md-7  col-sm-7 col-xs-7  blg-entry">
                                            <h6> <a href="{{route('blog.single', $post->slug)}}">{{$post->title}}</a></h6> 
                                            {{-- <p style="line-height: 17px; padding: 8px 2px;">Ksh {{$post->price}}</p> --}}
                                        </div>
                                    </li> 
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p style="color: #2A2A2A;">Subscribe to our notifications to get updated of latest deals.</p>

                                <form action="{{route('subscribe')}}" method="POST" data-parsley-validate>{{ csrf_field() }}
                                    <div class="input-group">
                                        <input class="form-control" name="email" type="email" placeholder="E-mail ... " required="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="submit"><i style="font-size: 20px; padding: 6px;" class="fa fa-send"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form> 

                                <div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://github.com/GeeksTalk/gtt_web" data-wow-delay="0.4s"><i class="fa fa-github"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s"><i class="fa fa-bitbucket"></i></a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) {{date('Y')}} <a style="color: cyan;" target="_blank" href="http://www.appslab.co.ke">Apps:Lab KE</a> |  All rights reserved  </span> 
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