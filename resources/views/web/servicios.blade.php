@extends('layouts.pagina')

@section('content')
    @parent

    <section class="ftco-cover" style="background-image: url({{ asset('web/images/home/portada.png') }});" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-40">
                <div class="col-md-10">
                    <h2 class="text-white">
                        EL PORTAL DIGITAL QUE TE CONECTA CON TUS CLIENTES
                    </h2>
                    <form action="" class="mt-4">
                        <div class="row filtro">
                            <div class="col">
                                <select name="" id="" class="form-control">
                                    <option value="">Prueba</option>
                                    <option value="">Prueba</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="" id="" class="form-control">
                                    <option value="">Prueba</option>
                                    <option value="">Prueba</option>
                                </select>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-primary btn-sm btn-block slide-text">Buscar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="row paginacion">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-between col-10">
                    <div class="d-flex">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="">Ordenar por: </label>
                                <select name="" id="" class="custom-select custom-select-sm orderBy mx-sm-3" aria-describedby="passwordHelpInline">
                                    <option value="">Relevancia</option>
                                    <option value="">Prueba</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex justify-content-between col-10 borde-servicio">
                    <div class="d-flex my-4">
                        <div class="d-flex img-portada">
                            <img src="http://via.placeholder.com/280x200" alt="" width="280">
                        </div>
                        <div class="pl-5">
                            <div class="">
                                <h4>MANUEL MEDRANO / Carpintero</h4>
                                <h5>Cartagena de Indias</h5>
                                <p>Ebanista con experiencia en fabricacion todo tipo de...</p>
                            </div>
                            <div class="d-flex align-self-end">
                                <button type="button" class="btn-custom btn btn-sm px-5 mr-2 btn-transparent">Website</button>
                                <button type="button" class="btn-custom btn btn-sm px-5 mr-2 btn-transparent">
                                    <i class="fas fa-phone-volume"></i>
                                    Contactar
                                </button>
                                <button type="button" class="btn-custom btn btn-sm px-5 mr-2 btn-transparent">
                                    <span class="oi oi-plus"></span>
                                    Mas detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#4586ff"/></svg></div>    
@endsection
