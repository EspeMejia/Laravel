@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    ¡Bienvenido doctor  {{(Auth::user()->name)}} {{(Auth::user()->surname)}}! Ha entrado correctamente.
                        <br>
                    <br>
                   {{-- <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" onclick=location.href="{{url('/citas.index')}}">
                                    Pulse aquí para ver las citas
                                </button>
                            </div>
                        </div>
                    </form>--}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
