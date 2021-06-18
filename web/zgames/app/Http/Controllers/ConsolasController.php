<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller
{
    public function getMarcas(){
        //definir una variable como arreglo con valores iniciales
        //$marcas = ["Sony","Microsoft","Nintendo","Sega"];
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";

        return $marcas;

    }

    public function getConsolas(){
        //equivalente a hacer un select * from consolas
        $consolas = Consola::all();
        return $consolas;
    }

    public function crearConsolas(){
        //equivalente a hacer un insert into
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anno = 2015;

        $consola->save();

        return $consola;
    }

}
