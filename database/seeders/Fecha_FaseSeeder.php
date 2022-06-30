<?php

namespace Database\Seeders;

use App\Models\Fechas_Fases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fecha_FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Fechas_Fases::create ([

        'fechas_id'=>1,
        'fases_id'=>1
    ]);
    }
}
