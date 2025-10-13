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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_veiculo');
            $table->string('modelo_veiculo',50);
            $table->string('placa_veiculo',7);
            $table->string('desc_veiculo',200);
            $table->string('ativo',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};
