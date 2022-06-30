<?php

namespace Database\Seeders;

use App\Models\Premios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Premios::create([

            'nombre' => 'Vencedor del torneo',
            'descripcion' => 'Vencio todos los equipos',
        ]);
    }
}
