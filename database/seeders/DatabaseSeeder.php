<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use App\Models\Localidades;
use App\Models\Premios;
use App\Models\Teams;
use App\Models\Tipo_fases;
use App\Models\Torneos;
use App\Models\User;
use App\Models\User_Teams;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teams_Torneos;


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
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            LocalidadeSeeder::class,
            TeamSeeder::class,
            User_TeamSeeder::class,
            Tipo_faseSeeder::class,
            FechaSeeder::class,
            TorneoSeeder::class,
            PremioSeeder::class,
            Torneo_Premio_Seeder::class,
            Teams_TorneoSeeder::class,
            FaseSeeder::class,
            Fecha_FaseSeeder::class,
            


            
            
        ]);
        
        
        
        // User::factory(10)->create();
        // Fase::factory(50)->create();

       // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
       //  ]);
        
    }
}
