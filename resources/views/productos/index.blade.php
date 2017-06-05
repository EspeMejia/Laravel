@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Productos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'productos.create', 'method' => 'get']) !!}
                        {!! Form::submit('Crear producto', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Base Imponible</th>
                                <th>IVA 21%</th>
                                <th>Total</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($productos as $producto)


                                <tr>
                                    <td>{{ $producto->name }}</td>
                                    <td>{{ $producto->baseimponible }}</td>
                                    <td>{{ $producto->iva }}</td>
                                    <td>{{ $producto->total }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['productos.edit',$producto->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['productos.destroy',$producto->id], 'method' => 'delete']) !!}
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