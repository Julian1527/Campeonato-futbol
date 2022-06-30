<?php

namespace Database\Seeders;

use App\Models\Torneos_Premios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Torneo_Premio_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Torneos_Premios::create([

        'premios_id'=> 1,
        'torneos_id'=> 1
        
       ]);
        
    }
}
