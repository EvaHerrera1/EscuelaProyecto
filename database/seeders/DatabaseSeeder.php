<?php

namespace Database\Seeders;

use App\Models\Grado;
use App\Models\Alumno;
use App\Models\Profesor;



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
        // \App\Models\User::factory(10)->create();
    
    $this->call([
    
        GradoSeeder::class,
        AlumnoSeeder::class,
        ProfesorSeeder::class,
        
    
       
      
       
       ]);
    }
}
