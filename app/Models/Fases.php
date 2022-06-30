<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fases extends Model
{
    use HasFactory;

    protected $table = 'fases';
    protected $fillable = [
        
        'teams_torneos_id',
        'tipo_fases_id'
        
    ]; 

    public function tipo_fases(){
        return $this->belongsTo(Tipo_fases::class);
    }
    public function teams_torneos(){
        return $this->belongsTo(Teams_Torneos::class);
    } 
}

