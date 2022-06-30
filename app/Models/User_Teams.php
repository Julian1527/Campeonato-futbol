<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Teams extends Model
{
    use HasFactory;
    protected $table = 'users_teams';
    protected $fillable = [
        'users_id',
        'teams_id',
        'tipo_jugador'
        
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function team(){
        return $this->belongsTo(Teams::class);
    }

}
