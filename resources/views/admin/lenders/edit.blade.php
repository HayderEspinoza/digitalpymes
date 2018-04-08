@extends('layouts.app')

@section('lenders') active @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Editar Prestador</h4>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {!! Form::model($lender, ['route' => ['lenders.update', $lender->id], 'method' => 'put']) !!}
                        <div class="row">
                            
                            <div class="form-group col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nombre</label>
                                {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('city_id') ? ' has-error' : '' }}">
                                <label for="city_id" class="control-label">Ciudad</label>
                                {{ Form::select('city_id', $cities, old('city_id'), ['class' => 'form-control']) }}
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="control-label">Direccion</label>
                                {{ Form::text('address', old('address'), ['class' => 'form-control']) }}
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('cellphone') ? ' has-error' : '' }}">
                                <label for="cellphone" class="control-label">Telefono</label>
                                {{ Form::text('cellphone', old('cellphone'), ['class' => 'form-control']) }}
                                @if ($errors->has('cellphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('service_id') ? ' has-error' : '' }}">
                                <label for="service_id" class="control-label">Servicio</label>
                                {{ Form::select('service_id', $services, old('service_id'), ['class' => 'form-control']) }}
                                @if ($errors->has('service_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('service_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('website') ? ' has-error' : '' }}">
                                <label for="website" class="control-label">Website</label>
                                {{ Form::text('website', old('website'), ['class' => 'form-control']) }}
                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                <label for="category_id" class="control-label">Categorias</label>
                                {{ Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control']) }}
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-8 {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="control-label">Descripcion</label>
                                {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'size' => '30x5']) }}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                {{ Form::submit('Actualizar', ['class' => 'btn btn-success']) }}
                            </div>

                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
