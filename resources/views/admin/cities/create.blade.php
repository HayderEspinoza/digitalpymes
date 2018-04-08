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
                            <h4>Nuevo Ciudad</h4>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'cities.store', 'class' => 'form']) !!}
                        <div class="row">
                            
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nombre</label>
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('departament_id') ? ' has-error' : '' }}">
                                <label for="departament_id" class="control-label">Departamento</label>
                                {{ Form::select('departament_id', $departaments, old('departament_id'), ['class' => 'form-control']) }}
                                @if ($errors->has('departament_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departament_id') }}</strong>
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
