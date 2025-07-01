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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('caja_id')->constrained('cajas')->onDelete('cascade');
            $table->foreignId('comprovante_id')->constrained('comprovantes')->onDelete('cascade');
            $table->decimal('suma', 8, 2)->nullable();
            $table->decimal('igv', 8, 2)->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->decimal('sub_total', 8, 2)->nullable();
            $table->decimal('descuentos', 8,2)->nullable();
            $table->foreignId('metodo_pago_id')->constrained('metodos_pagos')->onDelete('cascade');
            $table->integer('forma_pago')->nullable();
            $table->string('stock_minimo')->nullable();
            $table->integer('estado')->default(1); // 1: activo, 0: inactivo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
