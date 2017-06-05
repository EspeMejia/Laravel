@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar línea de factura</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($facturas, [ 'route' => ['facturas.update',$facturas->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!!Form::label('cita_id', 'Identificador de cita') !!}

                            {!! Form::select('cita_id',$citas, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('lineafactura_id', 'Identificador de linea de factura') !!}

                            {!! Form::select('lineafactura_id',$lineafacturas, ['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('total', 'Total') !!}
                            <br>
                            {!! Form::number('total',$facturas->total, ['class'=>'form-control', 'required']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
