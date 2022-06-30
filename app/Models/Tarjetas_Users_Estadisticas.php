<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjetas_Users_Estadisticas extends Model
{
    use HasFactory;
    protected $fillable=[
        'estadisticas_id',
        'tarjetas_users_id'
    ];
    public function estadisticas(){
        return $this->belongsTo(Estadisticas::class);
    }
    public function tarjetas_users(){
        return $this->belongsTo(Tarjetas_Users::class);
    } 
}
