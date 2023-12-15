<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;
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

Route::prefix('region')->group(function(){
    Route::get( '/', [RegionController::class, 'readAll'] );
    Route::get( '/{id}', [RegionController::class, 'readOne'] );
    Route::post( '/', [RegionController::class, 'create'] );
    Route::put( '/{id}', [RegionController::class, 'update'] );
    Route::delete( '/{id}', [RegionController::class, 'delete'] );
});

Route::prefix('provincia')->group(function(){
    Route::get( '/', [ProvinciaController::class, 'readAll'] );
    Route::get( '/{id}', [ProvinciaController::class, 'readOne'] );
});

Route::prefix('ciudad')->group(function(){
    Route::get( '/', [CiudadController::class, 'readAll'] );
    Route::get( '/{id}', [CiudadController::class, 'readOne'] );
});

Route::prefix('calle')->group(function(){
    Route::get( '/', [CalleController::class, 'readAll'] );
    Route::get( '/{nombre}', [CalleController::class, 'readOne'] );
    Route::post( '/', [CalleController::class, 'create'] );
    Route::put( '/{id}', [CalleController::class, 'update'] );
    Route::delete( '/{id}', [CalleController::class, 'delete'] );
});

Route::prefix('direccion')->group(function(){
    Route::get('/',[RegionController::class,'readAll']);
    Route::get('/{region_id}/provincia',[ProvinciaController::class,'readProvinciaForRegion']);
    Route::get('/{ciudad_id}/ciudad',[CiudadController::class,'readCiudadForProvincia']);
    Route::get('/{calle_id}/calle',[CalleController::class,'readCalleForCiudad']);
});