<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams_Torneos extends Model
{
    use HasFactory;

    protected $table = 'teams_torneos';
    protected $fillable = [
        'teams_id',
        'torneos_id'
        
    ];
    public function teams(){
        return $this->belongsTo(Teams::class);
    }
    public function torneos(){
        return $this->belongsTo(Torneos::class);
    }
    public function fases(){
        return $this->hasMany(Fases::class);    
    }
}
