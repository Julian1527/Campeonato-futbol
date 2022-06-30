<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'localidad_localidades_id',
        'logo'
    ];
    public function users_teams(){
        return $this->hasMany(User_Teams::class);
    }
    public function teams_torneos(){
        return $this->hasMany(Teams_Torneos::class);
    }
    public function estadisticas(){
        return $this->hasMany(Estadisticas::class);
    }
    public function localidades(){
        return $this->belongsTo(Localidades::class);
    }
}
