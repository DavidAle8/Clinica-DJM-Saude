<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Reverse the migrations.
     */
    public function down(): void{

        Schema::table('fazer', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove as colunas created_at e updated_at
        });
    }

};
