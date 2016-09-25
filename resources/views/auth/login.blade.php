@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Identificación de usuario
                </h3>
            </div>
            @if($id==1)
              <div class="form-group has-error">
                 <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Datos incorrectos</label>
              </div>
            @endif
            <div class="panel-body" style="padding:30px">

              <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="text">Nombre comercial</label>
                        <input type="text" name="nombreComercial" id="nombreComercial" value="{{ old('nombreComercial') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text">Nombre de usuario</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text">Pais</label>
                        <select class="form-control" name="pais" id="pais"required="Debe seleccionar un pais" onchange="seleccionaEstados(this)">

                          @foreach ($paises as $pais) {
                            <option value="{{$pais->Id}}">{{$pais->Nombre}}</option>

                          @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="clave" id="password" class="form-control">
                    </div>



                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px">
                            Aceptar
                        </button>
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px">
                            Cancelar
                        </button><br>

                    </div>
                    <a href="/navforms"  >
                        Registrar
                    </a><br>
                    <a href="#"  >
                        Olvide mi contrasenna
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>

@stop
