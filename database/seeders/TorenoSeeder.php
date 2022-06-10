<?php

namespace Database\Seeders;

use App\Models\Torneos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TorenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Torneos::create([

        'nombre' => 'Pedro Peralta',
        //'tipo' => 'copa'

       ]);
    }
}
