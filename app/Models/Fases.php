<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fases extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'teams_torneos_id',
        'tipo_fases_id'
        
    ]; 
}
