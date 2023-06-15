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
        Schema::create('upreceitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id',)->references('id')->on('clientes');
            $table->unsignedBigInteger('funcionarios_id');
            $table->foreign('funcionarios_id',)->references('id')->on('funcionarios');
            $table->string('arquivo', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upreceitas');
    }
};
