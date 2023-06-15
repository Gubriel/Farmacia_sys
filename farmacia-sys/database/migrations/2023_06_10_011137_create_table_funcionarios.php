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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('rg', 12);
            $table->string('cpf', 14);
            $table->string('telefone', 13);
            $table->string('email', 100);
            $table->date('data_nasc');
            $table->string('cidade', 60);
            $table->string('cep', 8);
            $table->string('bairro', 60);
            $table->string('rua', 50);
            $table->integer('numero');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
