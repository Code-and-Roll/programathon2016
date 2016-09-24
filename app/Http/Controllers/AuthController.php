<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $email = $request->input('EmailContacto');
        $password = $request->input('clave');
        if (Auth::attempt(['EmailContacto' => $email, 'password' => $password])) {
            // Authentication passed...
              return redirect('/');
        }else{
          return redirect('/login');
        }
    }
}
