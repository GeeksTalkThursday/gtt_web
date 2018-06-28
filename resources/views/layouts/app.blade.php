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
    <main class="main-container" style="margin-bottom: 30px;">
            
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

    {{--Start footer area --}}
        @include('partials.layouts._footer')
    {{--End footer area --}}


    <!-- Register popup html source start -->
    <div class="m-modal-box" id="registerModal">
        <div class="m-modal-overlay"></div>
            @include('partials.layouts._reg')
    </div>
    <!-- Register popup html source end ---->

    <!-- Login popup html source start -->
    <div class="m-modal-box" id="loginModal">
        <div class="m-modal-overlay"></div>
        @include('partials.layouts._login')
    </div>
    <!-- Login popup html source end -->

    <!-- Newsletter popup html source start -->
    @include('partials.layouts._subscribe')
    <!-- Newsletter popup html source end -->

    <div class="overlay"></div>

    @include('partials.layouts._js')

    {!! Toastr::render() !!}

</body>

</html>