<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pais;
use App\Estado;
use App\Sector;
use App\Genero;
use App\Http\Controllers\Controller;
use DB;

class FormController extends Controller
{
    public function mostrarPaises()
    {
        $pais = Pais::all();
        $estado = Estado::all();
        $sector = Sector::all();
        $genero = Genero::all();
        return view('partials.navforms', array('paises' => $pais,'isActiva' => 0,'estados'=>$estado,'sectores' => $sector,'generos'=>$genero));
    }

    public function mostrarEstados($idPais){
        $estados = Estado::find($idPais);
        return view('partials.navforms', ['estados' => $estados]);

    }

    /*public function mostrarSector()
    {
        $sector = Sector::all();
        return view('partials.navforms', array('sectores' => $sector));
    }*/

}
