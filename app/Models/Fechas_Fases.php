<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fechas_Fases extends Model
{
    use HasFactory;

    protected $table = 'fechas_fases';
    protected $fillable = [
        
        'fechas_id',
        'fases_id'
        
    ]; 
    public function fecha(){
        return $this->belongsTo(Fecha::class);
    }
    public function fases(){
        return $this->belongsTo(Fases::class);
    }
}
