@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'lineafacturas.create', 'method' => 'get']) !!}
                        {!! Form::submit('Crear línea de factura', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Id producto</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($lineafacturas as $lineafactura)


                                <tr>
                                    <td>{{ $lineafactura->producto_id }}</td>
                                    <td>{{ $lineafactura->cantidad }}</td>
                                    <td>{{ $lineafactura->subtotal}}</td>


                                    <td>
                                        {!! Form::open(['route' => ['lineafacturas.edit',$lineafactura->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['lineafacturas.destroy',$lineafactura->id], 'method' => 'delete']) !!}
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