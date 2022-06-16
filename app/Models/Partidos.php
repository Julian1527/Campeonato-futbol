<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'jornadas_id',
        'arbitros_users_id',
        'localidades_id'
        
        
    ];
}
