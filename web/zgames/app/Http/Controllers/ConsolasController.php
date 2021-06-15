<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
