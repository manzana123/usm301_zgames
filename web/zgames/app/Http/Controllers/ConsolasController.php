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

    public function crearConsolas(Request $request){
        //equivalente a hacer un insert into
        $input = $request -> all(); //Genera arreglo con todo lo mandado por la interfaz
        //Interfaz refiriendoce a javascript
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anno = $input["anno"];

        $consola->save();

        return $consola;
    }

}
