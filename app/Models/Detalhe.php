<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalhe extends Model {
    use HasFactory;
    protected $fillable = [
        'user_id',
        'telefone',
        'endereco',
        'cidade',
        'estado',
        'cep',
        'nascimento',
        'pai',
        'mae',
        'cpf',
        'rg',
        'detalhes',
    ];
}
