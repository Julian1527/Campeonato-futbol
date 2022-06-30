<?php

namespace Database\Seeders;

use App\Models\Torneos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TorneoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Torneos::create([

            'nombre' => 'Torneo Truck',
            'tipo_torneo' => 'copa'
    
           ]);
    }
}
