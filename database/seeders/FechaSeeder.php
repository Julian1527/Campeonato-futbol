<?php

namespace Database\Seeders;

use App\Models\Fecha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fecha::create([

            'fecha_partidos' => '2022-06-08 13:00:00',
        ]);
    }
}
