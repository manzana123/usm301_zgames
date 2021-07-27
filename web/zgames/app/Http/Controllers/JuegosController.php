<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Consola;

class JuegosController extends Controller
{
    //

    //obtener juegos a partir de una id_consola
    public function getJuegosByConsola(Request $request){
        $input = $request->all();
        $id_consola = $input["id_consola"];
        $consola = Consola::find($id_consola);
        return $consola->juegos()->get();
    }

    //devolver todos los juegos del sistema
    public function getJuegos(){
        return Juego::all();
    }

    //crear un juego nuevo
    public function save(Request $request){
        $input = $request->all();
        $nombre = $input["nombre"];
        $fecha = $input["fecha_lanzamiento"];
        $apto = $input["apto_ninnos"];
        $precio = $input["precio"];
        $descripcion = $input["descripcion"];
        $consola_id = $input["consola_id"];

        $juego = new Juego();
        $juego->nombre = $nombre;
        $juego->fecha_lanzamiento = $fecha;
        $juego->descripcion = $descripcion;
        $juego->apto_ninnos = $apto;
        $juego->precio = $precio;
        $juego->consola_id = $consola_id;

        //guardar en bd
        $juego->save();
        return $juego;

    }

    //eliminar un juego a partir de su id
    public function remove(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $juego = Juego::findOrFail($id);
        $juego->delete();
        return "ok";
    }

}
