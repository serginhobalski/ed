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
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agenda_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->string('titulo');
            $table->longText('descricao')->nullable();
            $table->longText('observacao')->nullable();
            $table->timestamps();
            $table->foreign('agenda_id')->references('id')->on('agendas')->cascadeOnDelete();
            $table->foreign('cliente_id')->references('id')->on('clientes')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
