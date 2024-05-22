<?php

namespace App\Http\Controllers\MdwApp;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function create()
    { 
        $user = Auth::user();
        

        return view('app.pages.create');
    }

    public function store(Request $request)
    {
        
        $user = Auth::user();        

        $lead = new Lead;
       
        $lead->name_client = $request->name_client;
        $lead->phone_client = $request->phone_client;
        $lead->email_client = $request->email_client;
        $lead->agent_id = $user->agent->id;

        $lead->save();
        

        return redirect()->route('app.dashboard');
    }
}
