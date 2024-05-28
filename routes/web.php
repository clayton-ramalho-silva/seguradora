<?php

/**Adm */

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MdwAdm\AgentController as AgentAdmController;
use App\Http\Controllers\MdwAdm\AuthController as AuthAdmController;
use App\Http\Controllers\MdwAdm\DashboardController;
use App\Http\Controllers\MdwAdm\LeadController as LeadAdmController;

/**App */
use App\Http\Controllers\MdwApp\AppController;
use App\Http\Controllers\MdwApp\AuthController as AuthAppController;
use App\Http\Controllers\MdwApp\LeadController as LeadAppController;
use App\Http\Controllers\MdwApp\AgentController as AgentAppController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/** Teste Login */
Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login-authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


/** Admin Group */

Route::middleware(['admin'])->group(function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
        //Route::get('login', [AuthAdmController::class, 'login'])->name('login');
        //Route::post('auth', [AuthAdmController::class, 'auth'])->name('auth');
    
         /**Middleware mdwadm Group */
        
            Route::get('dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
            /**Agentes */
            Route::get('agentes', [AgentAdmController::class, 'index'])->name('index-agentes');
            Route::get('agentes/{id}', [AgentAdmController::class, 'show'])->name('show-agente');
            Route::get('adcionar-agente', [AgentAdmController::class, 'create'])->name('create-agente');
            Route::post('agentes', [AgentAdmController::class, 'store'])->name('store-agente');
            Route::get('agente/{id}', [AgentAdmController::class, 'destroy'])->name('deletar-agente');
            Route::get('editar-agente/{id}', [AgentAdmController::class, 'edit'])->name('editar-agente');
            Route::put('agentes/{agent}', [AgentAdmController::class, 'update'])->name('update-agente');
            Route::get('agentes/lista-leads/{id}', [AgentAdmController::class, 'leads'])->name('lista-leads'); 
            //Route::get('documentos', function(){return "Chegou na rota";})->name('documentos');
            Route::get('documentos', [AgentAdmController::class,'documents'])->name('documentos');
            Route::post('documentos',[AgentAdmController::class, 'storeDocument'])->name('salvar-documento');
            Route::get('deletar-documento/{id}', [AgentAdmController::class, 'deleteDocument'])->name('deletar-documento');


            /**Leads */
            Route::get('leads', [LeadAdmController::class, 'index'])->name('index-leads');


        
        //Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
    });
});


/** App Group */

Route::middleware(['client'])->group(function(){
    Route::group(['prefix' => 'app', 'as' => 'app.'], function(){
        //Route::get('login', [AuthAppController::class, 'login'])->name('login');
        //Route::post('auth', [AuthAppController::class, 'auth'])->name('auth');
    
        
        Route::get('painel', [AppController::class, 'dashboard'])->name('dashboard');
    
            /** Leads */
        Route::get('lista-lead',[LeadAppController::class, 'index'])->name('listar-lead');
        Route::get('adicionar-lead', [LeadAppController::class, 'create'])->name('adicionar-lead');
        Route::post('adicionar-lead', [LeadAppController::class, 'store'])->name('store-lead');
        Route::get('leads/planilhas', [LeadAppController::class, 'listarPlanilhas'])->name('listar-planilhas');

        /** Agentes */
        Route::get('agentes/{id}', [AgentAppController::class, 'show'])->name('show-perfil');
        Route::get('editar-perfil/{id}', [AgentAppController::class, 'edit'])->name('editar-perfil');
        Route::put('atualizar-perfil/{id}', [AgentAppController::class, 'update'])->name('atualizar-perfil');
        
    
        //Route::get('logout', [AppController::class, 'logout'])->name('logout');
    });
});




/*
/** App Group */

//Route::group(['prefix' => 'app', 'as' => 'app.'], function(){
    //Route::get('login', [AuthAppController::class, 'login'])->name('login');
    //Route::post('auth', [AuthAppController::class, 'auth'])->name('auth');

    /**Middleware mdwapp Group */
//    Route::group(['middleware' => ['client']], function(){
  //      Route::get('dashboard', [AppController::class, 'dashboard'])->name('dashboard');

        /** Leads */
    //    Route::get('lista-lead',[LeadAppController::class, 'index'])->name('listar-lead');
      //  Route::get('adicionar-lead', [LeadAppController::class, 'create'])->name('adicionar-lead');
        //Route::post('adicionar-lead', [LeadAppController::class, 'store'])->name('store-lead');
    //});

    //Route::get('logout', [AppController::class, 'logout'])->name('logout');
//});


/** Admin Group */
//Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    //Route::get('login', [AuthAdmController::class, 'login'])->name('login');
    //Route::post('auth', [AuthAdmController::class, 'auth'])->name('auth');

     /**Middleware mdwadm Group */
  //  Route::group(['middleware' => ['admin']], function(){
    //    Route::get('dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
        /**Agentes */
      //  Route::get('agentes', [AgentAdmController::class, 'index'])->name('index-agentes');
        //Route::get('agentes/{id}', [AgentAdmController::class, 'show'])->name('show-agente');
        //Route::get('adcionar-agente', [AgentAdmController::class, 'create'])->name('create-agente');
       // Route::post('agentes', [AgentAdmController::class, 'store'])->name('store-agente');
        //Route::get('agente/{id}', [AgentAdmController::class, 'destroy'])->name('deletar-agente');
        //Route::get('editar-agente/{id}', [AgentAdmController::class, 'edit'])->name('editar-agente');
        //Route::put('agentes/{agent}', [AgentAdmController::class, 'update'])->name('update-agente');
    //});
    //Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
//});

