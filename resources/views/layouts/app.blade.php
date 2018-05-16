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
    <main class="main-container">
            
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

<<<<<<< HEAD
{{-- Footer html source start--}}
    @include('partials.layouts._footer')
    {{-- Footer html source end--}}
=======
    <footer class="footer" >
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

    </footer>
>>>>>>> da41c7c2ba43216d56b7c0bb46b86b354a05221f

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