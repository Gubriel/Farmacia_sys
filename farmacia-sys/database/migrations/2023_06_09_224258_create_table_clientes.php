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
            $table->id();
            $table->string('nome', 100);
            $table->string('rg', 12);
            $table->string('cpf', 14);
            $table->string('telefone', 13);
            $table->string('email', 100);
            $table->date('data_nasc');
            $table->decimal('peso', 5, 2);
            $table->decimal('altura', 3, 2);
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
        Schema::dropIfExists('clientes');
    }
};
