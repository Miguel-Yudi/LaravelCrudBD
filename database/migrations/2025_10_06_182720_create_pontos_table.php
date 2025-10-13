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
        Schema::create('pontos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_pon');
            $table->unsignedBigInteger('id_reg');
            $table->string('nome_pon',50);
            $table->string('desc_pon',200);
            $table->string('endereco_pon',100);
            $table->timestamps();

            $table->foreign('id_reg')->references('id_reg')->on('regiao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos');
    }
};
