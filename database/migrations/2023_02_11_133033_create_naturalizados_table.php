<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturalizados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_uno');
            $table->string('nombre_dos')->nullable();
            $table->string('nombre_tres')->nullable();
            $table->string('apellido_uno');
            $table->string('apellido_dos')->nullable();
            $table->string('apellido_tres')->nullable();
            $table->string('apellido_casada')->nullable();
            $table->bigInteger('ci_extranjero');
            $table->bigInteger('num_gaceta');
            $table->string('fecha_publicacion');
            $table->bigInteger('num_pagina');
            $table->bigInteger('num_linea');
            $table->bigInteger('expediente');
            $table->string('error_gaceta')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('naturalizados');
    }
};
