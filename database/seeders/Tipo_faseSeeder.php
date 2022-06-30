<?php

namespace Database\Seeders;

use App\Models\Tipo_fases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_faseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_fases::create([

            'nombre' => 'Octavos',

        ]);
    }
}
