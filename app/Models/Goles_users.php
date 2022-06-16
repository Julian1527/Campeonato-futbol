<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goles_users extends Model
{
    use HasFactory;
    protected $fillable=[

        'users_id',
        'partidos_id',
        'teams_id',
        'minuto_gol'
    ];
}
