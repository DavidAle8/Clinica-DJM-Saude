<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{

        Schema::create('medicos', function (Blueprint $table) {

            $table->string('cpf',14)->primary();
            $table->string('primeiro_nome',45);
            $table->string('sobrenome',45);
            $table->string('crm',5);
            $table->string('area',20);
            $table->float('salario');
            $table->date('data_nascimento')->nullable();
            $table->char('sexo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
