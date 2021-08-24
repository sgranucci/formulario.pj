<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->string('email',100);
            $table->date('fechanac');
            $table->unsignedBigInteger('tipo_docuemnto_id');
            $table->string('nro');
            $table->unsignedBigInteger('estado_civil_id');
            $table->unsignedBigInteger('genero_id');
            $table->string('celular');
            $table->unsignedBigInteger('pais_id');
            $table->string('cuit');
            $table->unsignedBigInteger('direccion_pais_id');
            $table->unsignedBigInteger('provincia_id');
            $table->unsignedBigInteger('localidad_id');
            $table->string('cp');
            $table->string('calle');
            $table->string('pisodto');
            $table->string('personaexpuesta');
            $table->string('motivo');
            $table->string('sujetoobligado');
            $table->string('residenciaexterior');
            $table->unsignedBigInteger('pais_id_otra_residencia');
            $table->timestamps();
            $table->string('dni_frente');
            $table->string('dni_dorso');
            $table->string('selfi');
            $table->string('archivo_1');
            $table->string('archivo_2');
            $table->string('archivo_3');
            $table->string('servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
