<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneos_Premios extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'premios_id',
        'torneos_id'
        
    ]; 
}
