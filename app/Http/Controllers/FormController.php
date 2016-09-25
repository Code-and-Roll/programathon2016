<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormController extends Controller
{
    public function registrarFormulario()
	{
		/*$user = new User;
		$user->name = 'Juan';
		$user->save();*/
	

		//return view('registro.Registro');
	}
=======
namespace App\Http\Controllers;

use App\Pais;
use App\Estado;
use App\Genero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class FormController extends Controller
{
    public function mostrarPaises()
    {
        $pais = Pais::all();
        return view('partials.navforms', array('paises' => $pais,'isActiva' => 0));
    }

    public function mostrarEstados($idPais){
        $estados = Estado::find($idPais);
        return view('partials.navforms', ['estados' => $estados]);

    }
>>>>>>> origin/master
}
