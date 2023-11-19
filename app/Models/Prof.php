<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model {
    use HasFactory;
    protected $fillable = [
        'user_id',
        'profissao',
        'bio',
        'telefone',
        'endereco',
    ];
}
