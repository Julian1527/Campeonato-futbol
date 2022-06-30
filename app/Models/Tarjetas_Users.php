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
    public function tarjetas_users_estadisticas(){
        return $this->hasMany(Tarjetas_Users_Estadisticas::class);
    }
    public function tipo_tarjeta(){
        return $this->belongsTo(Tipo_Tarjetas::class);
    }
    public function user(){
        return $this->belongsTo(Users::class);
    }
    
}
