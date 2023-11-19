<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model {
    use HasFactory;
    protected $fillable = [
        'agenda_id',
        'cliente_id',
        'titulo',
        'descricao',
        'observacao',
    ];
}
