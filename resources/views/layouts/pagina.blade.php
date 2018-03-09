<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    
    <title>{{ config('app.name', 'Digital Pymes') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="digitaldevs.co" />
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/open-iconic-bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
  </head>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    @yield('content')


    <script src="{{ asset('web/js/jquery.min.js')}}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('web/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.animateNumber.min.js') }}"></script>
    

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('web/js/google-map.js')}}"></script> --}}

    <script src="{{ asset('web/js/main.js')}}"></script>

    
  </body>
</html>