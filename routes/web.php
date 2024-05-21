<?php

use App\Http\Controllers\MdwAdm\AgentController as AgentAdmController;
use App\Http\Controllers\MdwAdm\AuthController as AuthAdmController;
use App\Http\Controllers\MdwAdm\DashboardController;
use App\Http\Controllers\MdwApp\AppController;
use App\Http\Controllers\MdwApp\AuthController as AuthAppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** App Group */
Route::group(['prefix' => 'app', 'as' => 'app.'], function(){
    Route::get('login', [AuthAppController::class, 'login'])->name('login');
    Route::post('auth', [AuthAppController::class, 'auth'])->name('auth');

    /**Middleware mdwapp Group */
    Route::group(['middleware' => ['mdwapp']], function(){
        Route::get('dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    });

    Route::get('logout', [AppController::class, 'logout'])->name('logout');
});


/** Admin Group */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('login', [AuthAdmController::class, 'login'])->name('login');
    Route::post('auth', [AuthAdmController::class, 'auth'])->name('auth');

     /**Middleware mdwadm Group */
    Route::group(['middleware' => ['mdwadm']], function(){
        Route::get('dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
        Route::get('agentes', [AgentAdmController::class, 'index'])->name('index-agentes');
        Route::get('agentes/{id}', [AgentAdmController::class, 'show'])->name('show-agente');
        Route::get('adcionar-agente', [AgentAdmController::class, 'create'])->name('create-agente');
        Route::post('agentes', [AgentAdmController::class, 'store'])->name('store-agente');
        Route::get('agente/{id}', [AgentAdmController::class, 'destroy'])->name('deletar-agente');
        Route::get('editar-agente/{id}', [AgentAdmController::class, 'edit'])->name('editar-agente');
        Route::put('agentes/{agent}', [AgentAdmController::class, 'update'])->name('update-agente');
    });
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
});

