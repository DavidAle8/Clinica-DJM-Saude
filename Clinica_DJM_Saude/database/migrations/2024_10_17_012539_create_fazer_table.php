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
        Schema::create('fazer', function (Blueprint $table) {

            $table->unsignedBigInteger('cpf');
            $table->integer('codigo');
            $table->string('medico_responsavel',45);
            $table->string('status',15);
            $table->date('data');
            $table->foreign('codigo')->references('codigo')->on('procedimentos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cpf')->references('cpf')->on('medicos')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['cpf','codigo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{

        Schema::dropIfExists('fazer');
    }
};
