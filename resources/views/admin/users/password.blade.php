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
                            <h4>Cambiar Contraseña de Usuario</h4>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => ['users.changePassword', $user->id], 'method' => 'put']) !!}
                        <div class="row">
                            
                            <div class="form-group col-md-4 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" >
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password_confirmation" class="control-label">Confirmar Contraseña</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" >
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
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
