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
                            <h4>Nuevo Usuario</h4>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'users.store', 'class' => 'form']) !!}
                        <div class="row">
                            
                            <div class="form-group col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="control-label">Apellido</label>
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" >
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label">Telefono</label>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" >
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group col-md-4 {{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="control-label">Nombre de usuario</label>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" >
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Correo</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group col-md-4 {{ $errors->has('role_id') ? ' has-error' : '' }}">
                                <label for="role_id" class="control-label">Roles</label>
                                {{ Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control']) }}
                                @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
                            </div>

                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
