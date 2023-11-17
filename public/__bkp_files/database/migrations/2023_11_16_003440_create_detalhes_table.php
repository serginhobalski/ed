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
        Schema::create('detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('telefone');
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado');
            $table->string('cep')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->longText('detalhes')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalhes');
    }
};
