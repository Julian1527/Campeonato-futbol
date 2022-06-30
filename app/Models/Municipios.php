<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'departamentos_id'
          
    ];
    public function departamentos(){
        return $this->belongsTo(Departamentos::class);
    }
}
