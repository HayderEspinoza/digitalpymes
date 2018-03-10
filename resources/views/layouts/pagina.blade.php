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

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('web/images/logo.png') }}" alt="" width="290">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">HOGAR</a></li>
            <li class="nav-item"><a href="#section-features" class="nav-link">EMPRESA</a></li>
            <li class="nav-item"><a href="#section-services" class="nav-link">PROFESIONAL</a></li>
            <li class="nav-item"><a href="#section-pricing" class="nav-link">SERVICIO</a></li>
            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">INGRESA</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer class="web-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 logo-footer">
            <img class="float-right" src="{{ asset('web/images/logo_negro.png') }}" alt="" width="100px"> 
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col">
                <ul class="list-unstyled">
                  <li><a href="#" class="footer-link">HOGAR</a></li>
                  <li><a href="#" class="footer-link">EMPRESA</a></li>
                  <li><a href="#" class="footer-link">PROFESIONAL</a></li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled">
                  <li><a href="#" class="footer-link">CONTACTO</a></li>
                  <li><a href="#" class="footer-link">(57) 302 4394586</a></li>
                </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled">
                  <li><a href="#" class="footer-link">REDES SOCIALES</a></li>
                  <li><a href="#" class="footer-link">INSTAGRAM</a></li>
                  <li><a href="#" class="footer-link">FACEBOOK</a></li>
                  <li><a href="#" class="footer-link">YOUTUBE</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


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