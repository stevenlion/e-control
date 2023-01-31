<?php

use App\Http\Controllers\MarcasController;
use LionRoute\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::any('/', [HomeController::class, 'index']);


Route::prefix('api', function() {
    Route::prefix('marcas', function() {
        Route::post('create', [MarcasController::class, 'createMarcas']);
        Route::post('update', [MarcasController::class, 'updateMarcas']);
        Route::post('inhabilitar', [MarcasController::class, 'updateMarcasInhabilitar']);
    });

    Route::prefix('auth', function() {
        Route::post('login', [LoginController::class, 'auth']);
    });
});

