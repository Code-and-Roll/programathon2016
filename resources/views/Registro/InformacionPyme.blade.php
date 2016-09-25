
   <form action="/registro" method="GET">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de la PYME</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
                  <div class="form-group">
                    <label for="nombreComercialPYME">Nombre comercial de la PYME</label>
                    <input type="text" class="form-control" id="nombreComercialPYME"  name="nombreComercialPYME" maxlength="100" placeholder="Ingrese el nombre comercial de la PYME" required="Debe ingresar un nombre comercial para la PYME">
                  </div>

                  <div class="form-group">
                    <label>Seleccione el Pais</label>
                    <select class="form-control" required="Debe seleccionar un pais" name="pais">
                      <option>Base de datos</option>
                      <option>Base de datos</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Seleccione la Provincia</label>
                    <select class="form-control"  required="Debe seleccionar una provincia" name="provincia">
                      <option>Base de Datos</option>
                      <option>Base de datos</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Seleccione el Sector</label>
                    <select class="form-control"  required="Debe seleccionar un Sector" name="sector">
                      <option>Base de Datos</option>
                      <option>Base de datos</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="nombreComercialPYME">C&eacuote;dula Jur&iacuote;dica</label>
                    <input type="text" class="form-control" id="nombreComercialPYME" name="nombreComercialPYME" maxlength="50" placeholder="Ingrese la identificaci&oacute;n de la PYME" required="Debe ingresar una identificaci&oacute;n para la PYME">
                  </div>

                  <div class="form-group">
                    <label>Seleccione el annio de inicio de operaciones</label>
                    <select class="form-control"  required="Debe seleccionar un Sector" name="annoOperaciones" size="1">

                              @for ($i=date("Y"); $i>=1900; $i--) {
                                <option value="{{$i}}">{{$i}}</option>
                              @endfor
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Seleccione su G&eacuote;nero</label>
                    <select class="form-control"  required="Debe seleccionar un genero" name="genero">
                      <option>Base de Datos</option>
                      <option>Base de datos</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="telefono">Tel&eacute;fono de la PYME</label>
                    <input type="text" class="form-control" id="telefono"  maxlength="50"  placeholder="Ingrese el numero de tel&eacute;fono de la PYME" required="Debe ingresar un tel&eacuote;fono para la PYME" name="telefono">
                  </div>

                  <div class="form-group">
                    <label for="direccion">Direcci&oacute;n de la PYME</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" maxlength="200" placeholder="Ingrese la direcci&oacute;n de la PYME" required="Debe ingresar la direcci&oacute;n de la PYME">
                  </div>

                @if($isActiva != 0)
                  <div class="form-group">
                    <div class="checkbox">
                      <label>PYME Activa</label>
                      <label>
                        <input type="checkbox" value="true" name="PYMEactiva">
                        Activa
                      </label>
                      <label>
                        <input type="checkbox" value="false" name="PYMEactiva">
                        Inactiva
                      </label>
                    </div>
                  </div>

                @endif

                              <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="PYMEfamiliar">
                                    Habilitado
                                  </label>

                                  <label>
                                    <input type="checkbox" name="PYMEfamiliar" checked="checked">
                                  Deshabilitado</label>
                                </div>
                              </div>


                                <div class="form-group">
                                  <label for="subirLogo">Seleccione el archivo del Logo del PYME</label>
                                  <input type="file" id="subirLogo" accept="*.gif,*.png" >

                                  <p class="help-block">Extensi&oacute;nes permitidas .gif, .png no m&aacute;s de 50 kb</p>
                                </div>
                                
                            
                        </div>


                        </div>
                       
                          <!-- /.box -->
