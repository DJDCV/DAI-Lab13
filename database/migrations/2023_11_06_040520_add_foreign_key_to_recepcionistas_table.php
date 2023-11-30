<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('recepcionistas', function (Blueprint $table) {
            $table->unsignedBigInteger('habitacion_id')->nullable();
            $table->foreign('habitacion_id')->references('id')->on('habitaciones');
        });
    }

    public function down(): void {
        Schema::table('recepcionistas', function (Blueprint $table) {
            $table->dropForeign(['habitacion_id']);
            $table->dropColumn('habitacion_id');
        });
    }
};