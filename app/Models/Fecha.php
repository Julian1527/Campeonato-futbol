<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_partidos',
        
    ];
    public function fechas_fases(){
        return $this->hasMany(Fechas_Fases::class);
    }
}
