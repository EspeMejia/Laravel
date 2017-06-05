@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Facturas</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'facturas.create', 'method' => 'get']) !!}
                        {!! Form::submit('Crear factura', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Id cita</th>
                                <th>Id linea factura</th>
                                <th>Total</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($facturas as $factura)


                                <tr>
                                    <td>{{ $factura->cita_id }}</td>
                                    <td>{{ $factura->lineafactura_id }}</td>
                                    <td>{{ $factura->total}}</td>


                                    <td>
                                        {!! Form::open(['route' => ['facturas.edit',$factura->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['facturas.destroy',$factura->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection