<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) { 
            $table->id('id_compra'); 
            $table->date('fecha'); 
            $table->unsignedBigInteger('id_instrumento')->nullable(); 
            $table->unsignedBigInteger('id_user')->nullable(); 
            $table->decimal('total', 8, 2); 

            $table->foreign('id_instrumento')->references('id_instrumento')->on('catalogos'); 
            $table->foreign('id_user')->references('id')->on('users');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
