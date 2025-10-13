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
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_cli');
            $table->string('nome_cli',50);
            $table->string('endereco_cli',100);
            $table->date('nasc_cli');
            $table->string('email_cli',1000);
            $table->string('tel_cli',14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
