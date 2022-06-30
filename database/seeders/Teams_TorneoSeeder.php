<?php

namespace Database\Seeders;

use App\Models\Teams_Torneos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teams_TorneoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Teams_Torneos::create([

        'teams_id'=>1,
        'torneos_id'=>1

       ]);
    }
}
