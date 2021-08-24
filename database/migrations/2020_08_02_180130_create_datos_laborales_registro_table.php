<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosLaboralesRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_laborales_registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('registro_id');
            $table->unsignedBigInteger('relacion_laboral_id');
            $table->unsignedBigInteger('actividad_id');
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
        Schema::dropIfExists('datos_laborales_registro');
    }
}
