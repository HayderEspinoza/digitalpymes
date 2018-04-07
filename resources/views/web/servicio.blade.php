@extends('layouts.pagina')

@section('content')
    @parent

    <section class="ftco-cover" style="background-image: url({{ asset('web/images/home/portada.png') }});" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-50">
                <div class="col-md-10">
                    <h2 class="text-white">
                        IMPULSA TU SERVICIO O NEGOCIO
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Como funciona -->
    <section class="ftco-section" id="section-services">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h1 class="text-uppercase">
                ASI ES COMO PODEMOS AYUDARTE ?
            </h1>
          </div>
        </div>
        <!-- END row -->
        <div class="row">

          <div class="col-md-12 mx-auto">

            <div class="row">
              
              <div class="col-md-4 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/buscar.png') }}" alt="Free Template by Free-Template.co" width="60%">
                </figure>
                <div class="wrap-funcion text-center">
                  <h3 class="h4">PRESENCIA</h3>
                  <p class="mt-4">
                  	Tu negocio necesita mas visibilidad para llegar a mas clientes potenciales
                  </p>
                  <p class="col-md-10 mx-auto">
			              <a href="#" class="btn btn-primary btn-sm btn-block">CONOCE MÁS</a>
			            </p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate text-center">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/llamar.png') }}" alt="Free Template by Free-Template.co" width="60%">
                </figure>
                <div class="wrap-funcion text-center">
                  <h3 class="h4">IMPRESO</h3>
                  <p class="mt-4">Hacemos que tu negocio se destaque llevandole visitas calificadas.</p>
                  <p class="col-md-10 mx-auto">
			              <a href="#" class="btn btn-primary btn-sm btn-block">CONOCE MÁS</a>
			            </p>
                </div>
              </div>

              <div class="col-md-4 offset-md-1 ftco-animate">
                <figure class="text-center">
                  <img src="{{ asset('web/images/home/satisfaccion.png') }}" alt="Free Template by Free-Template.co" width="60%">
                </figure>
                <div class="wrap-funcion text-center">
                  <h3 class="h4">CONVERSION</h3>
                  <p class="mt-4">Transformamos las visitas a tu negocio en clientes potenciales</p>
                  <p class="col-md-10 mx-auto">
			              <a href="#" class="btn btn-primary btn-sm btn-block">CONOCE MÁS</a>
			            </p>
                </div>
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
