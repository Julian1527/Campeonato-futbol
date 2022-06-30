<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornadas extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'fechas_fases_locales_id',
        'fechas_fases_visitantes_id'
        
    ]; 
    public function fecha_fases_locales(){
        return $this->belongsTo(Fechas_Fases::class);
    }
    public function fecha_fases_visitantes(){
        return $this->belongsTo(Fechas_Fases::class);
    }
}
