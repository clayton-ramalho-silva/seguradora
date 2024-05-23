<?php

/**Adm */

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MdwAdm\AgentController as AgentAdmController;
use App\Http\Controllers\MdwAdm\AuthController as AuthAdmController;
use App\Http\Controllers\MdwAdm\DashboardController;

/**App */
use App\Http\Controllers\MdwApp\AppController;
use App\Http\Controllers\MdwApp\AuthController as AuthAppController;
use App\Http\Controllers\MdwApp\LeadController as LeadAppController;
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
        
        //Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
    });
});


/** App Group */

Route::middleware(['client'])->group(function(){
    Route::group(['prefix' => 'app', 'as' => 'app.'], function(){
        //Route::get('login', [AuthAppController::class, 'login'])->name('login');
        //Route::post('auth', [AuthAppController::class, 'auth'])->name('auth');
    
        
        Route::get('dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    
            /** Leads */
        Route::get('lista-lead',[LeadAppController::class, 'index'])->name('listar-lead');
        Route::get('adicionar-lead', [LeadAppController::class, 'create'])->name('adicionar-lead');
        Route::post('adicionar-lead', [LeadAppController::class, 'store'])->name('store-lead');
        
    
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

