@extends('layouts.app')

@section('users') active @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Lista de Usuarios</h4>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('users.create') }}" class="btn btn-primary">Crear</a>
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
                                    <th scope="col">Nombre Usuario</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $city)
                                    <tr>
                                        <th scope="row"> {{ $index + 1 }} </th>
                                        <td> {{ $city->name . ' ' . $city->lastname }} </td>
                                        <td> {{ $city->username }} </td>
                                        <td> {{ $city->email }} </td>
                                        <td> {{ $city->phone }} </td>
                                        <td> {{ $city->role->name }} </td>
                                        <td>
                                            <a href="{{ route('users.edit', $city->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                            <a href="{{ route('users.destroy', [$city->id]) }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Esta seguro que desea eliminar el registro?" class="btn btn-danger btn-sm">Eliminar</a>
                                            <a href="{{ route('users.password', $city->id) }}" class="btn btn-success btn-sm">Password</a>
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
