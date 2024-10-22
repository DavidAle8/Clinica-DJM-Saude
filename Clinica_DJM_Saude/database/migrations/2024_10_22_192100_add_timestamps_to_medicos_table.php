<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(){

        Schema::table('medicos', function (Blueprint $table) {
            $table->timestamps(); // Isso vai adicionar as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(){
        
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropTimestamps(); // Isso remove as colunas created_at e updated_at
        });
    }

};
