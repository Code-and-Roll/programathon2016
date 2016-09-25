<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests;
use App\Pais;
use App\Estado;
use App\Sector;
use App\Genero;
use App\Http\Controllers\Controller;
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

    /*public function mostrarSector()
    {
        $sector = Sector::all();
        return view('partials.navforms', array('sectores' => $sector));
    }*/

}
