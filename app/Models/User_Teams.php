<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Teams extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'teams_id',
        'tipo_jugador',
        
    ];
}
