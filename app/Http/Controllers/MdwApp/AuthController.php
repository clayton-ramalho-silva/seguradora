<?php

namespace App\Http\Controllers\MdwApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        /**
         * Redirect para o dashboard se o usuário estiver conectado
         */

         if(Auth::guard('app')->check() === true){
            return redirect()->route('app.dashboard');
         }

         return view('app.auth');
    }

    public function auth(Request $request)
    {

        if (Auth::guard('app')->check() === true){
            return redirect()->route('app.dashboard');
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'client' => true
        ];

        if( !Auth::guard('app')->attempt($credentials)){
            echo "Credenciais do app inválidas!";
        }

        return redirect()->route('app.dashboard');
    }
}
