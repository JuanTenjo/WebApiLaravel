<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TallerTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_documens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TipoDocumen');
            $table->timestamps();
        });
        Schema::create('nivel_educativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NivelEducativo');
            $table->timestamps();
        });
        Schema::create('profecions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profecions');
            $table->timestamps();
        });

        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identificacion');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->boolean('estado');
            $table->unsignedBigInteger('tipo_documens_id');
            $table->foreign('tipo_documens_id')->references('id')->on('tipo_documens');
            $table->unsignedBigInteger('profecions_id');
            $table->foreign('profecions_id')->references('id')->on('profecions');
            $table->unsignedBigInteger('nivel_educativos_id');
            $table->foreign('nivel_educativos_id')->references('id')->on('nivel_educativos');
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
        Schema::dropIfExists('personas');
        Schema::dropIfExists('profecions');
        Schema::dropIfExists('tipo_documens');
        Schema::dropIfExists('nivel_educativos');
    }
}
