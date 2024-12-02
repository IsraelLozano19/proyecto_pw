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
        Schema::create('bodegas', function (Blueprint $table) { 
            $table->unsignedBigInteger('id_instrumento') ->nullable(); 
            $table->integer('cantidad'); 
            $table->decimal('precio', 8, 2);
            
            $table->foreign('id_instrumento')->references('id_instrumento')->on('catalogos');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas');
    }
};
