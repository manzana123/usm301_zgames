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

    public function eliminarConsolas(Request $request){
        $input = $request -> all();
        $id = $input["id"];
        //Eloquent: el administrador de BD de laravel se llama Eloquent
        //1. buscar registro en la bd
        $consola = Consola::findOrFail($id);
        //findOrFail se encarga de los casos donde la request falla
        //2. para eliminar, llamo al metodo delete
        $consola -> delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }

}
