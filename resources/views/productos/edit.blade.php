@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar producto</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($producto, [ 'route' => ['productos.update',$producto->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del producto') !!}
                            {!! Form::text('name',$producto->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('baseimponible', 'Apellidos del doctor') !!}
                            {!! Form::number('baseimponible',$producto->baseimponible,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('iva', 'IVA') !!}
                            <br>
                            {!! Form::number('iva',$producto->iva, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('total', 'Total') !!}
                            {!! Form::number('total',$producto->total,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
