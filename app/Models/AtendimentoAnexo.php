<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoAnexo extends Model {
    use HasFactory;
    protected $fillable = [
        'atendimento_id',
        'anexo_id',
    ];
}
