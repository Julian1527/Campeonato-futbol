<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    use HasFactory;
    protected $fillable = [
        'partidos_id',
        'teams_id',
        'resultado'
        
    ];
}
