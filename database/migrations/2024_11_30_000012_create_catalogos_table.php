<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('catalogos', function (Blueprint $table) { 
            $table->id('id_instrumento'); 
            $table->string('nombre'); 
            $table->unsignedBigInteger('tipo')->nullable();

            $table->foreign('tipo')->references('id_clasificacion')->on('clasificacions'); 
        });

    }

    
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
