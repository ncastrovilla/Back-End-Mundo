<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiKeyValidation;
use App\Http\Controllers\Api\BodegasController;
use App\Http\Controllers\Api\MarcaController;
use App\Http\Controllers\Api\ModeloController;
use App\Http\Controllers\Api\DispositivoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["middleware" => ApiKeyValidation::class], function() {
    Route::prefix('dispositivos')->group(function(){

        Route::get('/DispositivosPorBodega',[DispositivoController::class,'getDispositivos']);
    
    });
    
    Route::prefix('bodegas')->group(function(){
    
        Route::get('/ObtenerBodega',[BodegasController::class,'getBodegas']);
    
    });
    
    Route::prefix('marcas')->group(function(){
    
        Route::get('/ObtenerMarcas',[MarcaController::class,'getMarcas']);
    
    });
    
    Route::prefix('modelos')->group(function(){
    
        Route::get('/ObtenerModelosPorMarca',[ModeloController::class,'getModelosPorMarca']);
    
    });
});
