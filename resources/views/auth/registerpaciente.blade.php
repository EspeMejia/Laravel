@extends('layouts.app')
<style>
    .panel-heading{
        color: #D98880;
        background-color: #FFDAB9;
        font-family: 'Raleway', Calibri;
        font-size: 18px;
        font-weight: 200;
    }
    .panel-body{
        color: #D98880;
        background-color: #FFDAB9;
        font-family: 'Raleway', Calibri;
        font-size: 18px;
        font-weight: 100;
    }
    .btn btn-primary{
        font-family: 'Raleway', Calibri;
        font-size: 18px;
    }

</style>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registro de pacientes

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="dni" class="col-md-4 control-label">DNI:</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required autofocus>

                                @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fechanacimiento') ? ' has-error' : '' }}">
                            <label for="fechanacimiento" class="col-md-4 control-label">Fecha de nacimiento:</label>

                            <div class="col-md-6">
                                <input id="fechanacimiento" type="date" class="form-control" name="fechanacimiento" value="{{ old('fechanacimiento') }}" required autofocus>

                                @if ($errors->has('fechanacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechanacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nuhsa') ? ' has-error' : '' }}">
                            <label for="nuhsa" class="col-md-4 control-label">Número de Seguridad Social:</label>

                            <div class="col-md-6">
                                <input id="nuhsa" type="text" class="form-control" name="nuhsa" value="{{ old('nuhsa') }}" required autofocus>

                                @if ($errors->has('nuhsa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nuhsa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Dirección de Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    echo '<center><img src="..\images\logoclin.png" width="220" height="150" align="center" /> </center> '
    ?>

</div>


@endsection
