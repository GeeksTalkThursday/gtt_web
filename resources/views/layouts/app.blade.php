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

    <footer class="footer">
        <div class="main-content">
            <div class="main-content-wrapper">
                <div class="content-b">
                    <p style="text-align: center; padding: 10px;" >{{date('Y')." ".env('APP_NAME')}} | Powered By <a style="color:cyan; text-decoration: none;" href="https://www.appslab.co.ke" target="_blank">App:Lab KE</a> </p>
                </div>
            </div>
        </div>
    </footer>

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