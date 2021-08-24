<!DOCTYPE html>
    <head>
         <!-- basic -->
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!-- mobile metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="viewport" content="initial-scale=1, maximum-scale=1">
         <!-- site metas -->
         <title>{{ $title ?? 'TECHNO TOTAL' }}</title>
         <meta name="keywords" content="">
         <meta name="description" content="">
         <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- fevicon -->
        {{-- <link rel="icon" href="{{ asset('a') }}images/fevicon.png" type="image/gif" /> --}}
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Slick CDN -->
        @stack('styles-css')
        @stack('styles-js')
     </head>
    <body>
        @if ((Request::getRequestUri()) == "login" || (Request::getRequestUri()) == "/login")
             @yield('content')
        @else
            @include('default.header')
            @yield('content')
            @include('default.footer')
        @endif
    </body>
</html>