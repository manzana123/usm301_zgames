<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*Para utilizar un controlador, lo importamos de la siguiente manera=
use namespace\NombreClase
*/
use App\Http\Controllers\ConsolasController;

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