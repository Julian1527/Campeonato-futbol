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
    public function goles_users(){
        return $this->hasMany(Goles_users::class);
    }
    public function estadisticas(){
        return $this->hasMany(Estadisticas::class);
    }
    public function jornadas(){
        return $this->belongsTo(Jornadas::class);
    }
    public function arbitro_user(){
        return $this->belongsTo(User::class);
    }
    public function localidades(){
        return $this->belongsTo(Localidades::class);
    }
}
