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
        Schema::create('prodpedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedidos_id');
            $table->foreign('pedidos_id',)->references('id')->on('pedidos');
            $table->unsignedBigInteger('produtos_id');
            $table->foreign('produtos_id',)->references('id')->on('produtos');
            $table->integer('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodpedidos');
    }
};
