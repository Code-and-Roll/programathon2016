@extends('layouts.master')
@section('content')


<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav active"><a href="#A" data-toggle="tab">A</a></li>
        <li class="nav"><a href="#redessociales" data-toggle="tab">Redes sociales</a></li>
        
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="A">@include('Registro.InformacionUsuario')</div>
        <div class="tab-pane fade" id="redessociales"> @include('Registro.RedesSociales')</div>
    </div>
</div>


@endsection


  
 

