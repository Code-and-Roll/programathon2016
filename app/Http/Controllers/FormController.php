<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests;
use App\Pais;
use App\Estado;
use App\Sector;
use App\Genero;
use App\Usuario;
use App\Pyme;
use App\RedSocial;
use App\Tiporedsocial;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Image;
use DB;

class FormController extends Controller
{
    public function mostrarDatosFormulario()
    {
        $pais = Pais::all();
        $estado = Estado::all();
        $sector = Sector::all();
        $genero = Genero::all();
        return view('partials.navforms', array('paises' => $pais,'isActiva' => 0,'estados'=>$estado,'sectores' => $sector,'generos'=>$genero));
    }

    public function save(Request $request)
{//obtenemos el campo file definido en el formulario
       //$file = $request->file('file');

       //obtenemos el nombre del archivo
       //$nombre = $file->getClientOriginalName();
       $request->file('subirLogo')->move('img', $request->file('subirLogo')->getClientOriginalName());

       ////indicamos que queremos guardar un nuevo archivo en el disco local
      // \Storage::disk('local')->put($nombre,  \File::get($file));

      // return "archivo guardado";
}

    /*public function mostrarEstados($idPais){
        $estados = Estado::find($idPais);
        return view('partials.navforms', ['estados' => $estados]);

    }*/

    public function registrarFormulario(Request $request){
        $user = new usuario;
        $pyme = new pyme;
        
         $nombreCompleto = $request->input('nombreCompleto');
         $nombreUsuario = $request->input('nombreUsuario');
         $password = $request->input('password');
         $repetirPassword = $request->input('repetirPassword');
         $email = $request->input('email');
         $repetirEmail = $request->input('repetirEmail');

         try {
             $user -> Usuario = $nombreUsuario;
             $user -> NombreCompleto =  $nombreCompleto;
             $user -> Clave =   $password;
             $user -> EmailContacto = $email;
          
             $user->save();

        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

        $usuarioID = Usuario::max('ID');
        $nombreComercialPYME = $request->input('nombreComercialPYME');
        $estadoId = $request->input('pais');
        $sectorId = $request -> input('sector');
        $numeroTelefono = $request -> input('telefono');
        $annoInicio = $request -> input('inicioOperaciones');
        $annoInicio = substr($annoInicio, -2);
        $numeroTelefono = $request -> input('telefono');
        $direccion = $request -> input('direccion');
        $esNegocioFamiliar = $request -> input('PYMEfamiliar');
        $logo = $request->file('subirLogo')->move('img', $request->file('subirLogo')->getClientOriginalName());
        $extension = substr($logo, -3);

        /*$d = base64_decode($logo);
        $i = new*/
        $file = Input::file('subirLogo');
        $imgLogo = Image::make($file);
        Response::make($imgLogo->encode('jpeg'));
      /*  $imgLogo = file_get_contents($logo);
        $type = pathinfo($logo, PATHINFO_EXTENSION);
        $base64 = base64_encode($imgLogo);*/

        $cedulaJuridica = $request->input('cedulaJuridica');
        $fechaCreacion = date('Y-m-d H:i:s');
        $fechaActualizacion = date('Y-m-d H:i:s');
        $genero = $request->input('genero'); 


         try {
             $pyme -> NombreComercio = $nombreComercialPYME;
             $pyme -> EstadoID = $estadoId;
             $pyme -> SectorID = $sectorId;
             $pyme -> AnnoInicioOperaciones =  $annoInicio;
             $pyme -> NumeroTelefono = $numeroTelefono;
             $pyme -> Direccion =  $direccion;
             $pyme -> EsActiva = 1;
             $pyme -> EsNegocioFamiliar = $esNegocioFamiliar;
             $pyme -> Logo =  $imgLogo;//'data:image/' . $type . ';base64,' . $base64;
             $pyme -> ExtensionLogo = $extension;
             $pyme -> FechaCreacion = $fechaCreacion;
             $pyme -> FechaUltimaActualizacion = $fechaActualizacion;
             $pyme -> EsFacebookAppInstalado = 0;
             $pyme -> UsuarioID = $usuarioID;
             $pyme -> GeneroPropietarioID = $genero;
             $pyme -> CedJuridica =  $cedulaJuridica; 

             $pyme ->save();

        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
 }
      /*  $pymeActiva  = $request -> input('PYMEactiva');
        
        $logo = $request->file('subirLogo');

        //->move('img', $request->file('subirLogo')->getClientOriginalName());
        $extension = file('subirLogo')->getOriginalExtension();
        $fechaCreacion = getdate();
        $fechaActualizacion = getdate();
        $cedulaJuridica = $request->input('cedulaJuridica');*/


   //$nombreComercialPYME = $request->input('nombreComercialPYME');
   /*$facebook = $request->input('facebook');
   $nombreUsuario = $request->input('nombreUsuario');
   $nombreComercialPYME =  $request -> input('nombreComercialPYME');*/
    /* $twitter = $request->input('twitter');
    $linkedin = $request->input('linkedin');
    $youtube = $request->input('youtube');
    $urlPagina = $request->input('urlPagina');
    $correoContacto = $request->input('correoContacto');

     $user = new usuario;
        
         $nombreCompleto = $request->input('nombreCompleto');
         $nombreUsuario = $request->input('nombreUsuario');
         $password = $request->input('password');
         $repetirPassword = $request->input('repetirPassword');
         $email = $request->input('email');
         $repetirEmail = $request->input('repetirEmail');

          $user -> Usuario = $nombreUsuario;
          $user -> NombreCompleto =  $nombreCompleto;
          $user -> Clave =   $password;
          $user -> EmailContacto = $email;

        $user->save();
        */

  //return $facebook . $twitter. $linkedin . $youtube . $urlPagina . $email;
   
   
   
    /*. $direccion .  $pymeActiva  .  $esNegocioFamiliar .  $logo .  $extension .  $fechaCreacion . $fechaActualizacion . $cedulaJuridica;
    }

    /*public function mostrarSector()
    {
        $sector = Sector::all();
        return view('partials.navforms', array('sectores' => $sector));
    }*/

}
