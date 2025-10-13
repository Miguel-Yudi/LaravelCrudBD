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
        Schema::create('resp_veiculos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_resp_veiculo');
            $table->unsignedBigInteger('id_veiculo');
            $table->unsignedBigInteger('id_vend');
            $table->date('data');
            $table->timestamps();

            $table->foreign('id_veiculo')->references('id_veiculo')->on('veiculo')->onDelete('cascade');
            $table->foreign('id_vend')->references('id_vend')->on('vendedor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resp_veiculos');
    }
};
