    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{env('APP_NAME')}} is a rcode sharing platform from Apps:Lab KE">
        <meta name="author" content="Apps:Lab KE">
        <meta name="keyword" content="code, share, tech , community, learn, build, Eldoret, #EldoretToTheWorld">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon"

        <meta name="theme-color" content="#D60037">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'GTT') }} | @yield('title') </title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/zebra-tooltip/zebra_tooltips.min.css') }}">

    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/assets/owl.carousel.min.css')}}">

    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main-style.css') }}">

    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive-style.css')}}">

     <link href="{{asset('css/prism.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toaster.min.css') }}">

    {{-- <link href="{{asset('css/prism.css')}}" rel="stylesheet" /> --}}
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">