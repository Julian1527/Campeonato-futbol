<?php

namespace Database\Seeders;

use App\Models\User_Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_Teams::create([

            'users_id'=>1,
            'teams_id'=> 1,
            'tipo_jugador'=>'dt'
        ]);
    }
}
