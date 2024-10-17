<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{

        Schema::create('procedimentos', function (Blueprint $table) {

            $table->integer('codigo')->primary();
            $table->string('status',15);
            $table->string('resultado',45);
            $table->enum('tipo', ['Emergência', 'Cirurgia', 'Terapêutico','Diagnóstico','Estético']);
            $table->string('descricao', 45)->nullable();
            $table->string('preparacao', 45)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('procedimentos');
    }
};
