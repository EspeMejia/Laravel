@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar doctor</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($doctor, [ 'route' => ['doctors.update',$doctor->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del doctor') !!}
                            {!! Form::text('name',$doctor->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del doctor') !!}
                            {!! Form::text('surname',$doctor->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('numcolegiado', 'Número de colegiado') !!}
                            <br>
                            {!! Form::text('numcolegiado',$doctor->numcolegiado, ['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
