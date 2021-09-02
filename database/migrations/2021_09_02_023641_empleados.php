<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //crear tabla
        //parametro 1 nombre de la tabla y 2 funcion anonima
        Schema::create('empleados', function(Blueprint $table){
            //creamos las columnas

            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->string('correo');
            $table->string('tipo_contrato');
            $table->string('estado');

            $table->timestamps(); //crea columna created_at update_AT

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //verifica si esta creada la tabla en caso de existir
        Schema::dropIfExists('empleados');
    }
}
