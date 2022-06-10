<?php

namespace Database\Seeders;

use App\Models\Premios;
use App\Models\Teams;
use App\Models\Tipo_fases;
use App\Models\Torneos;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeamSeeder::class,
            Tipo_faseSeeder::class,
            FechaSeeder::class,
            PremioSeeder::class,
            TorenoSeeder::class
        ]);
        
        
        
        // User::factory(10)->create();
        // Fase::factory(50)->create();

       // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
       //  ]);
        
    }
}
