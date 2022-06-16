<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams_Torneos extends Model
{
    use HasFactory;
    protected $fillable = [
        'teams_id',
        'torneos_id'
        
        
    ];
}
