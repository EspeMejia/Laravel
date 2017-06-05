@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear doctor</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'doctors.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del doctor') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del doctor') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('DNI', 'DNI') !!}
                            {!! Form::text('DNI',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('numcolegiado', 'Numero de colegiado') !!}
                            <br>
                            {!! Form::text('numcolegiado',null, ['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection