<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos_Premios extends Model
{
    use HasFactory;
    protected $table = 'torneos_premios';
    protected $fillable = [
        
        'premios_id',
        'torneos_id'
        
    ];
    public function premios(){
        return $this->belongsTo(Premios::class);
    }
    public function torneos(){
        return $this->belongsTo(Torneos::class);
    } 
}
