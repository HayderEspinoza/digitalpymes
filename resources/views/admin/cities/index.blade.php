@extends('layouts.app')

@section('cities') active @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Lista de Ciudades</h4>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('cities.create') }}" class="btn btn-primary">Crear</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $index => $city)
                                    <tr>
                                        <th scope="row"> {{ $index + 1 }} </th>
                                        <td> {{ $city->name }} </td>
                                        <td> {{ $city->departament->name }} </td>
                                        <td>
                                            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                            <a href="{{ route('cities.destroy', [$city->id]) }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Esta seguro que desea eliminar el registro?" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection