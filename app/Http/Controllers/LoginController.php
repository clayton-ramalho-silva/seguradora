<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentialsAdmin = [
            'email' => $request->email,
            'password' => $request->password,
            'admin' => true
        ];

        $credentialsClient = [
            'email' => $request->email,
            'password' => $request->password,
            'client' => true
        ];

        

        if(Auth::attempt($credentialsAdmin)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }elseif(Auth::attempt($credentialsClient)){
            $request->session()->regenerate();
            return redirect()->route('app.dashboard');
        } 
        
        return redirect()->route('login');

    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->route('login');
    }
}
