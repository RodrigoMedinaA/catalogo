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
        Schema::table('negocios', function (Blueprint $table) {
            $table->string('criticidad')->nullable();
            $table->integer('tiempo_estimado')->nullable();
            $table->integer('sla_respuesta')->nullable();
            $table->integer('sla_resolucion')->nullable();
            $table->string('responsable')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('negocios', function (Blueprint $table) {
            $table->dropColumn(['criticidad', 'tiempo_estimado', 'sla_respuesta', 'sla_resolucion', 'responsable']);
        });
    }
};
