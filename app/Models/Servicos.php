<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'numero_os',
        'descricao',
        'modelo_equipamento',
    ];
}
