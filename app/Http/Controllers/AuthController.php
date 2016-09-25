<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use DB;
class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
      $usuario = new User;
      /*$usuario->Usuario = 'test';
      $usuario->NombreCompleto = 'test';
      $usuario->Clave = bycryp('test');
      $usuario->EmailContacto = 'test@test.com';
      $usuario->save();*/

          $email = $request->input('EmailContacto');
        $password = $request->input('clave');
        /*$usuario = DB::table('usuario')->where('EmailContacto', $email);
        Auth::login($usuario);*/
        try {
        $user = User::where('EmailContacto', $email)
                    ->where('Clave', $password)->first();
                    //Crea instancia en la session
                  }
        catch (Exception $e) {
                return redirect('/login/1');
        }
        if(!$user){
          return redirect('/login/1');
        }else{
          Auth::login($user);
          return redirect('/');
        }
    }
}
