<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IgualarEntornos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividades', function ($table) {
            $table->string('name', 200)->change();
        });

        Schema::table('datos_laborales_registro', function ($table) {
            $table->string('actividad_id', 200)->change();
        });

        Schema::table('registros', function ($table) {
            $table->bigInteger('user_id')->nullable();
            $table->string('calle_nro', 10);
            $table->string('cod_area', 10);
            $table->string('estado', 50);
            $table->string('ide_tribu', 50);
            $table->string('motivo', 255)->nullable();
            $table->string('archivo_1', 255)->nullable();
            $table->string('archivo_2', 255)->nullable();
            $table->string('archivo_3', 255)->nullable();
            $table->string('servicio', 255)->nullable();
            $table->string('tieneagente', 255)->nullable();
            $table->string('agente', 255)->nullable();
            $table->string('estado', 50)->nullable();
            $table->string('ide_tribu', 50)->nullable();
            $table->string('pisodto', 255)->nullable();
            $table->bigInteger('pais_id_otra_residencia')->nullable();
        });

        Schema::create('test_inversor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pregunta1')->nullable();
            $table->integer('pregunta2')->nullable();
            $table->integer('pregunta3')->nullable();
            $table->integer('pregunta4')->nullable();
            $table->integer('pregunta5')->nullable();
            $table->integer('pregunta6')->nullable();
            $table->integer('pregunta7')->nullable();
            $table->integer('pregunta8')->nullable();
            $table->integer('pregunta9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
