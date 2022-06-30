<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo_torneo',
    ];
    public function torneos_premios(){
        return $this->hasMany(Torneos_Premios::class);
    }
    public function teams_torneos(){
        return $this->hasMany(Teams_Torneos::class);
    }

}
