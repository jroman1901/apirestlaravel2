<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1;


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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Route::apiResource('v1/estudiantes', App\Http\Controllers\Api\v1\EstudiantesController::class)->middleware('api');
/*
Route::get('v1/estudiantes', 'EstudiantesController@index');
Route::get('v1/estudiantes/search', 'EstudiantesController@search');
Route::post('v1/estudiantes', 'EstudiantesController@create');
Route::get('v1/estudiantes/{id}', 'EstudiantesController@show');
Route::put('v1/estudiantes/{id}', 'EstudiantesController@update');
Route::delete('v1/estudiantes/{id}', 'EstudiantesController@delete');
*/

Route::resource('v1/estudiantes', App\Http\Controllers\Api\v1\EstudiantesController::class);