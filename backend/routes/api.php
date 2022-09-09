<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarios_diesel_controller;
use App\Models\usuarios_diesel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

Route::group([],
    function($router){
        Route::get('/usuarios', [usuarios_diesel_controller::class, 'index']);
        Route::post('/usuarios/new', [usuarios_diesel_controller::class, 'store']);
        Route::get('/usuarios/{id}', [usuarios_diesel_controller::class, 'show']);
        route::post('/usuario/update/{id}', [usuarios_diesel_controller::class,'update']);
    }
);

