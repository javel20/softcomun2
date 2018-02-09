<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',250);
            $table->string('propietario',150);
            $table->string('ubicacion',150);
            //$table->string('altura_maxima');
            //$table->string('lote_normativo');
            //$table->string('frente_normativo');
            //$table->string('fecha_inicio');
            //$table->string('fecha_fin');
            //$table->string('area_terreno');
            //$table->string('area_techado');
            //$table->string('coeficiente_edificacion');
            //$table->string('area_libre');
            //$table->string('numero_estacionamiento');
            //$table->string('responsable');
            //$table->string('estado');
            $table->string('descripcion',150)->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('proyectos');
    }
}
