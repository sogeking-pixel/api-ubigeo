<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\provinciaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/login',[UserController::class,'login'] )->name('api.login');



//* ruta para que pueda entrar cualquiera

Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResource('departamentos', DepartamentoController::class)->only(['index','show']);
        Route::apiResource('departamentos.provincias', provinciaController::class)->shallow()->only(['index','show']);
        Route::apiResource('departamentos.provincias.distritos', DistritoController::class)->shallow()->only(['index','show']);
});



//* ruta solo para admin

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::apiResource('departamentos', DepartamentoController::class)->except(['index','show']);
    Route::apiResource('departamentos.provincias', provinciaController::class)->shallow()->except(['index','show']);
    Route::apiResource('departamentos.provincias.distritos', DistritoController::class)->shallow()->except(['index','show']);
    Route::post('/register',[UserController::class,'register'] );   
        
});

//* ruta solo para cliente
// Route::middleware(['auth:sanctum', 'role:cliente'])->group(function () {
//     Route::apiResource('departamentos', DepartamentoController::class)->except(['index','show']);
//     Route::apiResource('departamentos.provincias', provinciaController::class)->shallow()->except(['index','show']);
//     Route::apiResource('departamentos.provincias.distritos', DistritoController::class)->shallow()->except(['index','show']);   
        
// });