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

            $table->string('cpf',14);
            $table->integer('codigo');
            $table->string('medico_responsavel',45);
            $table->string('status',15);
            $table->date('data');
            $table->primary(['cpf', 'codigo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fazer');
    }
};
