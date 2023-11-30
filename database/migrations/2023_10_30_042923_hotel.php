<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // Tabla de habitaciones
        Schema::create('habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->string('tipo');
            $table->text('descripcion')->nullable();
            $table->boolean('disponible')->default(true);
            $table->timestamps();
        });

        // Tabla de recepcionistas
        Schema::create('recepcionista', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->timestamps();
        });

        // Tabla de huéspedes
        Schema::create('huesped', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->dateTime('fecha_nacimiento');
            $table->string('documento_identidad');
            $table->string('ocupacion');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        // Eliminar las tablas en orden inverso
        Schema::dropIfExists('huespedes');
        Schema::dropIfExists('recepcionistas');
        Schema::dropIfExists('habitaciones');
    }
};