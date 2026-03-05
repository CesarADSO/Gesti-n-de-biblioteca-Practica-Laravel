<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            // CREAMOS LOS CAMPOS DE LA TABLE AUTORS PARA LUEGO MIGRAR EN LA BASE DE DATOS
            $table->id();
            $table->string('titulo');
            $table->string('estado_fisico');
            $table->date('fecha_publicacion');
            $table->string('editorial');
            $table->string('genero');
            $table->integer('numero_paginas');
            $table->string('idioma');

            // CREAMOS EL CAMPO AUTOR_ID Y LE ASIGNAMOS LA CLAVE FORÁNEA AL CAMPO ID DE LA TABLA AUTORS
            $table->foreignId('id_autor')->constrained('autors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
