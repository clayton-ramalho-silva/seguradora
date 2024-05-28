<?php

namespace App\Http\Controllers\MdwApp;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function show(String $id)
    {
        $user = User::find($id);

        return view('app.pages.show', ['user' => $user]);

    }

    public function edit(String $id)
    {
        $user = User::find($id);

        return view('app.pages.edit',['user' => $user]);
    }

    public function update(Request $request, String $id)
    {        
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        $logo_company_atual = $user->agent->logo_company;

        // upload foto
        if($request->hasFile('logo_company') && $request->file('logo_company')->isValid()){
            $requestImage = $request->logo_company;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;
            $requestImage->move(public_path('img/agentes'), $imageName);

            $logo_company = $imageName;

            if($logo_company_atual){
                unlink(public_path('img/agentes/'.$logo_company_atual));
            }
        }else{
            $logo_company = $user->agent->logo_company;
        }


        Agent::where('user_id', $user->id)->update([
            'name_company' => $request->name_company,
            'phone_company' => $request->phone_company,
            'email_company' => $request->email_company,
            'logo_company' => $logo_company,
        ]);

        return redirect()->route('app.dashboard');
    }
}
