<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Tarjetas extends Model
{
    use HasFactory;
    protected $fillable=[
        'tipo_tarjeta'

    ];
    public function torneos_premios(){
        return $this->hasMany(Torneos_Premios::class);
    }
}
