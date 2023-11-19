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
        Schema::create('atendimento_anexos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atendimento_id')->nullable();
            $table->string('anexo')->nullable();
            $table->timestamps();
            $table->foreign('atendimento_id')->references('id')->on('atendimentos')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimento_anexos');
    }
};
