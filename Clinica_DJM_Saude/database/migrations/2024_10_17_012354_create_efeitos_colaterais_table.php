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
        Schema::create('efeitos_colaterais', function (Blueprint $table) {

            $table->string('efeito_colateral', 45);
            $table->integer('codigo');
            $table->primary(['efeito_colateral', 'codigo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('efeitos_colaterais');
    }
};
