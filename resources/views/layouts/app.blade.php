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

    </main>

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