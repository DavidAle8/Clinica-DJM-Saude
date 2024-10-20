<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     */
    public function up(): void{
        
        Schema::create('emails', function (Blueprint $table) {

            $table->string('email',45);
            $table->string('cpf',14);
            $table->foreign('cpf')->references('cpf')->on('medicos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};



// Schema::create('emails', function (Blueprint $table) {

//     $table->string('email',45);
//     $table->string('cpf',14);
//     $table->primary(['email', 'cpf']);
    
// });