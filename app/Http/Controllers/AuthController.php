<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use App\Pais;
use DB;
class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */

    public function getLogin(){
      $pais = Pais::all();
      return view('auth.login',array('paises' => $pais,'id'=>0));
    }
    public function authenticate(Request $request)
    {
      $usuario = new User;
      /*$usuario->Usuario = 'test';
      $usuario->NombreCompleto = 'test';
      $usuario->Clave = bycryp('test');
      $usuario->EmailContacto = 'test@test.com';
      $usuario->save();*/

        $nombreComercial = $request->input('nombreComercial');
        $nombre = $request->input('nombre');
        $password = $request->input('clave');
        $pais = $request->input('pais');
        /*$usuario = DB::table('usuario')->where('EmailContacto', $email);
        Auth::login($usuario);*/
        try {

        /*$user = User::where('Nombre', $nombre)
                    ->where('Clave', $password)->first();
                    //Crea instancia en la session
                  */
                  $user = $user = User::join('pyme', 'usuario.ID', '=', 'pyme.UsuarioID')
                          ->join('estado', 'estado.Id', '=', 'pyme.EstadoID')
                          ->where('usuario.Usuario',$nombre)
                          ->where('usuario.Clave',$password)
                          ->where('pyme.NombreComercio',$nombreComercial)
                          ->where('estado.PaisID',$pais)->first();

                }
        catch (Exception $e) {
                  return view('auth.login',array('paises' => $pais,'id'=>0));
        }
        if(!$user){
          $pais = Pais::all();
          return view('auth.login',array('paises' => $pais,'id'=>1));
          return redirect('/login/1');
        }else{
          Auth::login($user);
          return redirect('/index');
        }
    }
}
