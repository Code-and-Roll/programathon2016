  
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Datos personales</h3>
            </div>
            <div class="box-body" >
               <div class="input-group">
                    <label for="nombreCompleto">Nombre completo</label>
                  <input type="text" id="nombreCompleto" name="nombreCompleto" class="form-control" placeholder="Nombre completo" maxlength="50" required="Debe ingresar su nombre completo para continuar" value="{{old('nombreCompleto')}}">
                </div>
                <br>

                <div class="input-group">
                    <label for="nombreUsuario">Nombre de usuario</label>
                  <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-control" placeholder="Nombre de usuario" maxlength="50"  value="{{old('nombreUsuario')}}">>
                </div>
                <br>

                <div class="input-group">
                    <label for="password">Contraseña</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" maxlength="10" minlength="8" value="{{old('password')}}">
                </div>
                <br>

                <div class="input-group">
                  <label for="repetirPassword">Repetir contraseña</label>
                  <input type="password"  id="repetirPassword" name="repetirPassword" class="form-control" placeholder="Repetir contraseña" maxlength="10" minlength="8">
                </div>
                <br>


                <div class="input-group">
                  <label for="email">Correo electrónico</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico" maxlength="50" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">>
                </div>
                <br>

                 <div class="input-group">
                  <label for="repetirEmail">Repetir correo electrónico</label>
                  <input type="email" id="repetirEmail" name="email" class="form-control" placeholder="Repetir correo electrónico" maxlength="50" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">>
                </div>
                <br>
            <div class="box-footer">
                  <button type="submit" class="btn btn-default">Aceptar</button>
            </div>
                 
            </div>
      </div> 
 </form>