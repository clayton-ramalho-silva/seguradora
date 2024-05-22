<?php

namespace App\Http\Controllers\MdwAdm;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        //$userGuard = User::activeGuard();
        $userGuard = Auth::user();

        //dd($userGuard);
        
        return view('admin.pages.dashboard', [
            'userGuard' => $userGuard
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        
        return redirect()->route('admin.login');

    }
}
