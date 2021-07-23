<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*Para utilizar un controlador, lo importamos de la siguiente manera=
use namespace\NombreClase
*/
use App\Http\Controllers\ConsolasController;
use App\Http\Controllers\JuegosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//La ruta puede ser post o get (post para enviar cosas a la bd, get para obtener)
//Route::post|get("endpoint|final de la url",[controlador::class,"metodo"])
Route::get("marcas/get",[ConsolasController::class,"getMarcas"]);


Route::get("consolas/get",[ConsolasController::class,"getConsolas"]);

Route::get("consolas/filtrar",[ConsolasController::class,"filtrarConsolas"]);

Route::post("consolas/post",[ConsolasController::class,"crearConsolas"]);

Route::post("consolas/delete",[ConsolasController::class,"eliminarConsolas"]);


Route::get("juegos/get",[JuegosController::class,"getJuegos"]);

Route::get("juegos/getJuegosByConsola",[JuegosController::class,"getJuegosByConsola"]);

Route::post("juegos/post",[JuegosController::class,"save"]);

Route::post("juegos/delete",[JuegosController::class,"remove"]);