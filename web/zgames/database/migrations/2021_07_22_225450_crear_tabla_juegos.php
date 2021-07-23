<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaJuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            //1- definir campos de la tabla juegos
            $table->string("nombre",50);
            $table->string("descripcion",200);
            $table->tinyInteger("apto_ninnos")->default(0);
            $table->integer("precio")->unsigned();
            $table->date("fecha_lanzamiento");
            //2- agregar columna de claves foraneas
            //las claves primarias de laravel (id) por defecto son bigInteger y unsigned
            $table->bigInteger("consola_id")->unsigned();
            //3- agregar la relacion
            $table->foreign("consola_id")->references("id")->on("consolas")->onDelete("cascade"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
}
