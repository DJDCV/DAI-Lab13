<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('huespedes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            
            $table->unsignedBigInteger('habitacion_id')->nullable();
            $table->foreign('habitacion_id')->references('id')->on('habitaciones');


            $table->unsignedBigInteger('recepcionista_id')->nullable();
            $table->foreign('recepcionista_id')->references('id')->on('recepcionistas');
        });
    }

    public function down(): void {
        Schema::table('huespedes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            
            $table->dropForeign(['habitacion_id']);
            $table->dropColumn('habitacion_id');
            
            $table->dropForeign(['recepcionista_id']);
            $table->dropColumn('recepcionista_id');
        });
    }
};
