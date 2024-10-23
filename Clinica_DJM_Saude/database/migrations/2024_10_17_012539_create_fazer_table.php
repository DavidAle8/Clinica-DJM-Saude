<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('fazer', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('cpf');
            $table->integer('codigo');
            $table->string('medico_responsavel', 45);
            $table->string('status', 15);
            $table->date('data');
            $table->timestamps();
            
            // Definindo as chaves estrangeiras
            $table->foreign('cpf')->references('cpf')->on('medicos')->onDelete('cascade');
            $table->foreign('codigo')->references('codigo')->on('procedimentos')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void{

        Schema::dropIfExists('fazer');
    }

};
