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
                    ¿Cómo te quieres registrar? Selecciona tu rol en la clínica:

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" onclick=location.href="{{url('/registeradmin')}}">
                                    Administrador
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" onclick=location.href="{{url('/registersecretaria')}}">
                                  Secretaría
                                </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="button" class="btn btn-primary" onclick=location.href="{{url('/registerdoctor')}}">
                                    Personal médico
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
