@extends('layouts.pagina')

@section('content')
    @parent

    <section class="ftco-cover" style="background-image: url({{ asset('web/images/home/portada.png') }});" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-10">
            <h1 class="ftco-heading ftco-animate mb-5">
              ENCUENTRA LA EMPRESA O EL SERVICIO QUE BUSCAS, <span class="text-blue">A UN SOLO CLICK</span>
            </h1>
            <div class="row justify-content-center">
              <div class="col-md-4">
                  <a href="#" class="btn btn-sm btn-white btn-block slide-text">SERVICIOS PARA TU home</a>
              </div>
              <div class="col-md-4">
                  <a href="#" class="btn btn-primary btn-sm btn-block slide-text">EMPRESAS</a>
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
            <h2 class="text-uppercase ftco-uppercase">
              <span class="subtitle">SERVICIOS M&Aacute;S DESTACADOS</span>
            </h2>
          </div>
          
          <div class="col-md-10 mx-auto">
            <div class="row">

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/home/plomeria.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>PLOMERO</h3>
                <div class="p-3 text-center">
                  <p class="mb-0">
                    <a href="#" class="btn btn-primary btn-sm btn-block">BUSCAR</a>
                  </p>
                </div>
              </div>

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/home/electricista.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>ELICTRICISTA</h3>
                <div class="p-3 text-center">
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm btn-block">BUSCAR</a></p>
                </div>
              </div>

              <div class="col-md bg-white p-5 m-2 text-center mb-2 ftco-animate servicio-destacado">
                <figure>
                  <img src="{{ asset('web/images/home/carpinteria.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                </figure>
                <h3>CARPINTEROS</h3>
                <div class="p-3 text-center">
                  <p class="mb-0"><a href="#" class="btn btn-primary btn-sm btn-block">BUSCAR</a></p>
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
            <h2 class="text-uppercase ftco-uppercase">
              <span class="subtitle">
                ¿COMO FUNCIONA?
              </span>
            </h2>
          </div>
        </div>
        <!-- END row -->
        <div class="row">

          <div class="col-md-10 mx-auto">

            <div class="row">
              
              <div class="col-md-4 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/buscar.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="wrap-funcion text-center">
                  <h3 class="h4">BUSCA</h3>
                  <p class="mb-4">Encuentra el servicio o empresas que buscas</p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate text-center">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/llamar.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="wrap-funcion text-center">
                  <h3 class="h4">CONTACTA</h3>
                  <p class="mb-4">Agenda tu cita y solicita el profesional que necesitas</p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/satisfaccion.png') }}" alt="Free Template by Free-Template.co" width="40%">
                </figure>
                <div class="wrap-funcion text-center">
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
            <h2 class="text-uppercase ftco-uppercase">
              <span class="subtitle">
                ¿ERES UN PROFESIONAL CALIFICADO?
              </span>
            </h2>
            <div class="super-titulo">
              <h2 class="text-blue">
                SUMATE A NUESTRA RED 
              </h2>
              <h2>DE PROFESIONALES</h2>
            </div>
            <div class="row justify-content-center mb-5">
              <div class="col-md-5">
                <p class="lead">Accede a toda hora a cientos de trabajos diarios, tu manejas tu agenda y eliges que trabajo quieres publicitar. Haz crecer tu negocio y consigue nuevos clientes.</p>
              </div>
            </div>
            <p class="col-md-2 mx-auto">
              <a href="#" class="btn btn-primary btn-sm btn-block">QUIERO SER PARTE</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- fin quieres ser parte -->

    <!-- Como funciona -->
    <section class="ftco-section bg-light" id="section-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="text-uppercase ftco-uppercase">
              <span>
                ESTAMOS DISPUESTO A AYUDARTE
              </span>
            </h2>
            <p class="mt-1">DEJENOS SU EMAIL Y LO CONTACTAREMOS</p>
          </div>
        </div>
        <!-- END row -->
        <div class="row">

          <div class="col-md-10 mx-auto">
            <div class="row contacto">
              <div class="form-group col-md-4">
                <input type="text" class="form-control" placeholder="*Nombre">
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" placeholder="*Email">
              </div>
              <div class="form-group col-md-4">
                <input type="text" class="form-control" placeholder="*Telefono">
              </div>
              <div class="form-group col-md-10 mx-auto">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Escriba su mensaje aqui."></textarea>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Fin como funciona -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>    
@endsection
