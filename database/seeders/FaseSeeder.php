<?php

namespace Database\Seeders;

use App\Models\Fase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder

{
    /**
     * Run the database seeds.
     * @return void
     */
    
         
     public function run ()
     
    
    {
        // $nombres = ['Octavos de Final','Cuartos de Final','Semifinal','Gran Final'];
        // $descripcion = ['Primera fase', 'Segunda Fase', 'Tercera Fase', 'Ultima Fase'];

        $fases = [
            [
                'name' => 'Octavos de Final',
                'descripcion' => 'Primera fase'
            ],
            [
                'name' => 'Cuartos de Final',
                'descripcion' => 'Segunda Fase'
            ],
            [
                'name' => 'Semifinal',
                'descripcion' => 'Tercera Fase'
            ],
            [
                'name' => 'Gran Final',
                'descripcion' => 'Ultima Fase'
            ],
        ];

        foreach($fases as $value){
            $fase = new Fase();
            $fase->name = $value['name'];
            $fase->descripcion = $value['descripcion'];
            $fase->categoria = 'futbol';

            $fase->save();

        }


        
    }
}
