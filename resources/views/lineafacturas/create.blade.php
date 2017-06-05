@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear línea de factura</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'lineafacturas.store']) !!}
                        {{----}}
                        <div class="form-group">
                            {!! Form::label('cantidad', 'Cantidad') !!}
                            {!! Form::number('cantidad',null,['class'=>'form-control', 'required','autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('subtotal', 'Subtotal') !!}
                            <br>
                            {!! Form::number('subtotal',null, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('producto_id', 'Identificador de producto asociado') !!}
                            <br>

                            {!! Form::select('producto_id',$productos, ['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection