<?php

use App\Http\Controllers\ClientesControllers;
use App\Http\Controllers\MarcasController;
use LionRoute\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application e-control
 * ------------------------------------------------------------------------------
 **/

Route::any('/', [HomeController::class, 'index']);


Route::prefix('api', function() {

    Route::prefix('marcas', function() {
        Route::post('create', [MarcasController::class, 'createMarcas']);
        Route::post('update', [MarcasController::class, 'updateMarcas']);
        Route::post('inhabilitar', [MarcasController::class, 'updateMarcasInhabilitar']);
    });

    Route::prefix('clientes', function() {
        Route::post('select', [ClientesControllers::class, 'readClientes']);
    });

    Route::prefix('auth', function() {
        Route::post('login', [LoginController::class, 'auth']);
    });
});

