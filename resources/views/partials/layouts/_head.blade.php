    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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