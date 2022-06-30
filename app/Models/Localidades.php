<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'municipios_id'
    ];
    public function municipios(){
        return $this->belongsTo(Municipios::class);
    }
    public function partidos(){
        return $this->hasMany(Partidos::class);
    }
    public function teams(){
        return $this->hasMany(Teams::class);
    }
}
