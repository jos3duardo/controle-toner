<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toner extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo',
        'marca',
        'tipo',
        'status',
        'cilindro'
    ];
}
