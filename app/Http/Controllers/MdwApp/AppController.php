<?php

namespace App\Http\Controllers\MdwApp;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard()
    {
        $userGuard = User::activeGuard();
        
        return view('app.pages.dashboard', [
            'userGuard' => $userGuard
        ]);
    }

    public function logout()
    {
        Auth::guard('app')->logout();
        return redirect()->route('app.login');
    }
}
