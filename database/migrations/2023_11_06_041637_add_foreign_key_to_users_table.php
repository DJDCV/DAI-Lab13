<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {

            $table->unsignedBigInteger('habitacion_id')->nullable();
            $table->foreign('habitacion_id')->references('id')->on('habitaciones');


            $table->unsignedBigInteger('recepcionista_id')->nullable();
            $table->foreign('recepcionista_id')->references('id')->on('recepcionistas');


            $table->unsignedBigInteger('huesped_id')->nullable();
            $table->foreign('huesped_id')->references('id')->on('huespedes');
        });
    }

    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['habitacion_id']);
            $table->dropColumn('habitacion_id');
            
            $table->dropForeign(['recepcionista_id']);
            $table->dropColumn('recepcionista_id');
            
            $table->dropForeign(['huesped_id']);
            $table->dropColumn('huesped_id');
        });
    }
};
