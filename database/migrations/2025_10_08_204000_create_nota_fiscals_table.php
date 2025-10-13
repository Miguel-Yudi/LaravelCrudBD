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
        Schema::create('nota_fiscal', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_nota');
            $table->unsignedBigInteger('id_cli');
            $table->unsignedBigInteger('id_vend');
            $table->timestamps();

            $table->foreign('id_cli')->references('id_cli')->on('clientes')->onDelete('cascade');
            $table->foreign('id_vend')->references('id_vend')->on('vendedor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_fiscal');
    }
};
