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
        Schema::create('autors', function (Blueprint $table) {
            // CREAMOS LOS CAMPOS DE LA TABLE AUTORS PARA LUEGO MIGRAR EN LA BASE DE DATOS
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nacionalidad');
            $table->date('fecha_nacimiento');
            $table->text('biografia_breve')->nullable();
            $table->integer('premios_ganados')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autors');
    }
};
