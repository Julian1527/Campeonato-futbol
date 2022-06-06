<?php

namespace Database\Seeders;

use App\Models\Fase;
use App\Models\Teams;
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
        $this->call([UserSeeder::class]);
        $this->call([FaseSeeder::class]);
        $this->call([TeamSeeder::class]);
        
        // User::factory(10)->create();
        // Fase::factory(50)->create();

       // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
       //  ]);
        
    }
}
