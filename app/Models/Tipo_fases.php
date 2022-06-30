<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_fases extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nombre',
        
    ];
    public function fases(){
        return $this->hasMany(Fases::class);
    }
}
