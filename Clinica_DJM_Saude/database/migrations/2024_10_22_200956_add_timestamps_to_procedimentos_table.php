<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){

        Schema::table('procedimentos', function (Blueprint $table) {
            $table->timestamps(); // Isso adiciona as colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        
        Schema::table('procedimentos', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove as colunas se necessário
        });
    }

};
