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
        Schema::create('vendedor', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_vend');
            $table->unsignedBigInteger('id_reg');
            $table->string('nome_vend',50);
            $table->string('endereco_vend',100);
            $table->date('nasc_vend');
            $table->string('email_vend',100);
            $table->string('tel_vend',14);
            $table->string('ativo',15);
            $table->timestamps();

             $table->foreign('id_reg')->references('id_reg')->on('regiao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendedor');
    }
};
