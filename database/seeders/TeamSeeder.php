<?php

namespace Database\Seeders;

use App\Models\Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teams::create([
            'nombre' => 'Maravilla21',
            'localidad_localidades_id'=>1,
            'logo' => 'ssAsAS.aasd.aas'
            
        ]);

    }
}
