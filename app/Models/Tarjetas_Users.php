<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjetas_Users extends Model
{
    use HasFactory;
    protected $fillable=[

        'tipo_terjetas_id',
        'users_id',
        'minuto_tarjeta'

    ];
}
