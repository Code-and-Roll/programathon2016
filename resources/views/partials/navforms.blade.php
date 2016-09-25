
@extends('layouts.master')

@section('content')


<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav active"><a href="#informacionpyme" data-toggle="tab">Informaci&oacute;n principal PYME</a></li>
        <li class="nav"><a href="#redessociales" data-toggle="tab">Informaci&oacute;n Redes Sociales</a></li>
        <li class="nav"><a href="#informacionusuario" data-toggle="tab">Informaci&oacute;n Personal Cliente</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="informacionpyme">@include('Registro.InformacionPyme')</div>
        <div class="tab-pane fade" id="redessociales">@include('Registro.RedesSociales')</div>
        <div class="tab-pane fade" id="informacionusuario">@include('Registro.InformacionUsuario')</div>

    </div>
</div>


<<<<<<< HEAD
=======


>>>>>>> 9cea4577a90f3e4311a70e2eafb9623f2b11a60d

@endsection
