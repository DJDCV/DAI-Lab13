<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->unsignedBigInteger('recepcionista_id')->nullable(); 
            $table->foreign('recepcionista_id')->references('id')->on('recepcionistas');
        });
    }

    public function down(): void {
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->dropForeign(['recepcionista_id']);
            $table->dropColumn('recepcionista_id');
        });
    }
};