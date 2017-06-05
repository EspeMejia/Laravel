@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear factura</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'facturas.store']) !!}
                        {{----}}
                        <div class="form-group">
                            {!! Form::label('cita_id', 'Identificador cita') !!}
                            {!! Form::select('cita_id',$citas,['class'=>'form-control', 'required','autofocus']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::label('lineafactura_id', 'Identificador de línea de factura asociada') !!}

                            {!! Form::select('lineafactura_id',$lineafacturas, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('total', 'Total') !!}

                            {!! Form::number('total',null, ['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection