@extends('layouts.pagina')

@section('content')
    @parent

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          Digitals Pymes
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
            <li class="nav-item"><a href="#section-about" class="nav-link">INGRESA</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover" style="background-image: url({{ asset('web/images/hogar/portada.png') }});" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-10">
            <h1 class="ftco-heading ftco-animate mb-5">
              ENCUENTRA LA EMPRESA O EL SERVICIO QUE BUSCAS, A UN SOLO CLICK
            </h1>
            <div class="row justify-content-center">
              <div class="col-md-4">
                  <a href="#" class="btn btn-sm btn-white btn-block">SERVICIOS PARA TU HOGAR</a>
              </div>
              <div class="col-md-4">
                  <a href="#" class="btn btn-primary btn-sm btn-block">EMPRESAS</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Servicios destacados -->
    <section class="ftco-section" id="section-features">
      <div class="container">
        
        <div class="row destacados">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">SERVICIOS DESTACADOS</h2>
          </div>
          
          <div class="col-md-10 mx-auto">
            <div class="row">

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/hogar/plomeria.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>PLOMERO</h3>
                <div class="p-3 text-center">
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">BUSCAR</a></p>
                </div>
              </div>

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/hogar/electricista.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>ELICTRICISTA</h3>
                <div class="p-3 text-center">
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">BUSCAR</a></p>
                </div>
              </div>

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/hogar/carpinteria.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>CARPINTEROS</h3>
                <div class="p-3 text-center">
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">BUSCAR</a></p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Fin Servicios destacados -->

    <!-- Como funciona -->
    <section class="ftco-section bg-light" id="section-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">¿COMO FUNCIONA?</h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">

          <div class="col-md-10 mx-auto">

            <div class="row">
              
              <div class="col-md-4 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/hogar/buscar.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="p-3 text-center">
                  <h3 class="h4">BUSCA</h3>
                  <p class="mb-4">Encuentra el servicio o empresas que buscas</p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate text-center">
                <figure class="text-center">
                  <img src="{{ asset('web/images/hogar/llamar.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="p-2">
                  <h3 class="h4">CONTACTA</h3>
                  <p class="mb-4">Agenda tu cita y solicita el profesional que necesitas</p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/hogar/satisfaccion.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="p-3 text-center">
                  <h3 class="h4">SOLUCIONA</h3>
                  <p class="mb-4">Listo. El profesional realiza el servicio. Calificalo</p>
                </div>
              </div>

            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- Fin como funciona -->

    <!-- quieres ser parte -->
    <section class="ftco-section" id="section-pricing">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">¿ERES UN PROFESIONAL CALIFICADO?</h2>
            <div class="super-titulo">
              <h2 class="azul">
                SUMATE A NUESTRA RED 
              </h2>
              <h2>DE PROFESIONALES</h2>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-6">
                <p class="lead">Accede a toda hora a cientos de trabajos diarios, tu manejas tu agenda y eliges que trabajo quieres publicitar. Haz crecer tu negocio y consigue nuevos clientes.</p>
              </div>
            </div>
            <p>
              <a href="#" class="btn btn-primary btn-sm">QUIERO SER PARTE</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- fin quieres ser parte -->

    <footer class="ftco-footer ftco-bg-dark">
      <div class="container">
        <div class="row ">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md">
                <div class="ftco-footer-widget">
                  <h2 class="ftco-heading-2"></h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">HOGAR</a></li>
                    <li><a href="#" class="py-2 d-block">EMPRESA</a></li>
                    <li><a href="#" class="py-2 d-block">PROFESIONAL</a></li>
                    <li><a href="#" class="py-2 d-block">SERVICIOS</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md text-left">
            <p>&copy; Exclusivity 2017. All Rights Reserved.  Made with <span class="icon-heart text-danger"></span>  by <a href="https://free-template.co/">Free-Template.co</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>    
@endsection
