<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Juan',
            'apellido' => 'ortiz',
            'identificacion' => '123546',
            'email' => 'gay@io.co',
            'password' => Hash::make('12345')
        ]);
    }
}
