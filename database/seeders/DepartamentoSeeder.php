<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Departamentos::create([

        'nombre'=>'Huila',

    ]);
    }
}
