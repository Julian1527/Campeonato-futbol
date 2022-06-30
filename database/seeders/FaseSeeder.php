<?php

namespace Database\Seeders;

use App\Models\Fases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fases::create([
            'teams_torneos_id'=>1,
            'tipo_fases_id'=>1
        ]);
    }
}
