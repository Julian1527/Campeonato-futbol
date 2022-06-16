<?php

namespace Database\Seeders;

use App\Models\Localidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Localidades::create([

            'nombre'=>'Los cuchilleros'
        ]);
    }
}
