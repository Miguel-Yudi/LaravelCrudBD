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
        Schema::create('produto_vendidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_produto_vendido');
            $table->unsignedBigInteger('id_nota');
            $table->unsignedBigInteger('id_prod');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('id_nota')->references('id_nota')->on('nota_fiscal')->onDelete('cascade');
            $table->foreign('id_prod')->references('id_prod')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_vendidos');
    }
};
