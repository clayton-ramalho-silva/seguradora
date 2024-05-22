<?php

namespace App\Http\Controllers\MdwAdm;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('client',1)->get();    
           

        return view('admin.pages.agentes',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);


        $name = $request->name;
        $email = $request->email;
        $name_company = $request->name_company;
        $phone_company = $request->phone_company;
        $email_company = $request->email_company;

        // upload foto
       if($request->hasFile('logo_company') && $request->file('logo_company')->isValid()){
        $requestImage = $request->logo_company;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $requestImage->move(public_path('img/agentes'), $imageName);

        $logo_company = $imageName;

       }


        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(60),            
            'admin' => 0,
            'client' => 1
            
        ]);

        Agent::create([
            'name_company' => $name_company,
            'phone_company' => $phone_company,
            'email_company' => $email_company,
            'logo_company' => $logo_company,
            'user_id' => $user->id

        ]);

        return redirect()->route('admin.index-agentes');       


    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $user = User::find($id);
        
        return view('admin.pages.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $user = User::find($id);

        return view('admin.pages.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $user = User::find($id);      

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        //$logo_company = '';
        $logo_company_atual = $user->agent->logo_company;

        // upload foto
        if($request->hasFile('logo_company') && $request->file('logo_company')->isValid()){
            $requestImage = $request->logo_company;;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/agentes'), $imageName);

            $logo_company = $imageName;

            if($logo_company_atual){
                unlink(public_path('img/agentes/'.$logo_company_atual));
            }

        }       

        Agent::where('user_id', $user->id)->update([
            'name_company' => $request->name_company,
            'phone_company' => $request->phone_company,
            'email_company' => $request->email_company,
            'logo_company' => $logo_company,
        ]);           


        return redirect()->route('admin.index-agentes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.index-agentes');
    }
}
