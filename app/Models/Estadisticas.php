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
    public function tarjetas_users_estadisticas(){
        return $this->hasMany(Tarjetas_Users_Estadisticas::class);
    }
    public function partidos(){
        return $this->belongsTo(Partidos::class);
    }
    public function teams(){
        return $this->belongsTo(Teams::class);
    } 
}
