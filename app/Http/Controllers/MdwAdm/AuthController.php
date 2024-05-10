<?php

namespace App\Http\Controllers\MdwAdm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        /**
         * Redirecionar para o dashboard se o usuário estiver conectado
         */

        if (Auth::guard('admin')->check() === true){
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth');
    }

    public function auth(Request $request)
    {
        if(Auth::guard('admin')->check() === true) {
            return redirect()->route('admin.dashboard');
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'admin' => true,
        ];

        if(!Auth::guard('admin')->attempt($credentials)){
            echo "Credenciais do adm inválidas";
        }

        return redirect()->route('admin.dashboard');
    }
}
