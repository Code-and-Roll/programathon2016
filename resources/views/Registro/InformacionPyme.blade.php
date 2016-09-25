
   <form action="/registro" method="POST"  enctype="multipart/form-data">
   {!! csrf_field() !!}
     <script>

          function seleccionaEstados(idPais){
            var seleccionado = document.getElementById('pais').value;
            var combo ='<select class="form-control"  required="Debe seleccionar una provincia">';
            var provincias =[
             @foreach ($estados as $estado)
                  '{{$estado->Nombre}}',
             @endforeach
             ,'0'];
             var idProvincias =[
              @foreach ($estados as $estado)
                   '{{$estado->Id}}',
              @endforeach
              ,'0'];
              var paisId =[
               @foreach ($estados as $estado)
                    '{{$estado->PaisID}}',
               @endforeach
               ,'0'];
               for(i=0;i<paisId.length;i++){
                 if(paisId[i]==seleccionado){
                   combo+='<option value="'+provincias[i]+'">'+provincias[i]+'</option>';
                 }

               }
               combo+='</select>';
               $("#combo1").html(combo);
          }
     </script>
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la PYME</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" >
              <div class="box-body">
                <div class="form-group">
                  <label for="nombreComercialPYME">Nombre comercial de la PYME</label>
                  <input type="text" class="form-control" id="nombreComercialPYME"  maxlength="100" placeholder="Ingrese el nombre comercial de la PYME" required="Debe ingresar un nombre comercial para la PYME">
                </div>

                <div class="form-group">
                  <label>Seleccione el Pais</label>
                  <select class="form-control" id="pais"required="Debe seleccionar un pais" onchange="seleccionaEstados(this)">

                    @foreach ($paises as $pais) {
                      <option value="{{$pais->Id}}">{{$pais->Nombre}}</option>

                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  <label>Seleccione la Provincia</label>

                    <div id="combo1">
                        <select class="form-control"  required="Debe seleccionar una provincia"></select>
                    </div>

                </div>

                <div class="form-group">
                  <label>Seleccione el Sector</label>
                  <select class="form-control"  required="Debe seleccionar un Sector">

                    @foreach ($sectores as $sector) {
                      <option value="{{$sector->Nombre}}">{{$sector->Nombre}}</option>

                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  <label for="nombreComercialPYME">Cedula Juridica</label>
                  <input type="text" class="form-control" id="nombreComercialPYME"  maxlength="50" placeholder="Ingrese la identificaci&oacute;n de la PYME" required="Debe ingresar una identificaci&oacute;n para la PYME">
                </div>

                <div class="form-group">
                  <label>Seleccione el annio de inicio de operaciones</label>
                  <select class="form-control"  required="Debe seleccionar un Sector" size="1">

                            @for ($i=date("Y"); $i>=1900; $i--) {
                              <option value="{{$i}}">{{$i}}</option>
                            @endfor
                  </select>
                </div>

                <div class="form-group">
                  <label>Seleccione su Genero</label>
                  <select class="form-control"  required="Debe seleccionar un genero">
                    @foreach ($generos as $genero) {
                      <option value="{{$genero->Nombre}}">{{$genero->Nombre}}</option>

                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="telefono">Tel&eacute;fono de la PYME</label>
                  <input type="text" class="form-control" id="telefono"  maxlength="50" placeholder="Ingrese el numero de tel&eacute;fono de la PYME" required="Debe ingresar un tel&eacuote;fono para la PYME">
                </div>

                <div class="form-group">
                  <label for="direccion">Direcci&oacute;n de la PYME</label>
                  <input type="text" class="form-control" id="direccion"  maxlength="200" placeholder="Ingrese la direcci&oacute;n de la PYME" required="Debe ingresar la direcci&oacute;n de la PYME">
                </div>

                @if($isActiva != 0)
                  <div class="form-group">
                    <div class="checkbox">

                      <fieldset>

                      <leyend>PYME Activa?</leyend>
                        <label>
                        <input type="radio" value="1" name="PYMEactiva">
                        Activa
                      </label></br>
                        <label>
                        <input type="radio" value="0" name="PYMEactiva">
                      </label>Inactiva</br>

                      </fieldset>
                    </div>
                  </div>

                @endif

                              <div class="form-group">
                                <div class="checkbox">

                                  <fieldset>
                                  <leyend>Negocio Familiar?</leyend></br>
                                  <label>
                                    <input type="radio" value="1" name="PYMEfamiliar">
                                    Habilitado
                                  </label></br>

                                  <label>
                                    <input type="radio" value="0" name="PYMEfamiliar" checked="checked">
                                    Deshabilitado
                                  </label></br>
                                </div>
                              </div>


                                <div class="form-group">
                                  <label for="subirLogo">Seleccione el archivo del Logo del PYME</label>
                                  <input type="file" id="subirLogo" name="subirLogo" accept="*.gif,*.png" >

                                  <p class="help-block">Extensi&oacute;nes permitidas .gif, .png no m&aacute;s de 50 kb</p>
                                </div>


                        </div>


                        </div>
                        <div class="box-footer">
                              <button type="submit" class="btn btn-default">Aceptar</button>
                        </div>
                      </form>
                          <!-- /.box -->
