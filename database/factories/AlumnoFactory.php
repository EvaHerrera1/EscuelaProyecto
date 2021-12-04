<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;
class AlumnoFactory extends Factory
{
    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'primer_nombre'=> $this->faker->name(),
            'primer_apellido'=> $this->faker->lastName(),
            'edad'=> $this->faker-> numberBetween(6, 15),
            'telefono' => $this->faker-> phoneNumber(),
            'direccion'=>$this->faker-> address(),
            'jornada'=>$this->faker->randomElement($array = array('Matutina', 'Vespertina')),

            'grado_id' => $this->faker->numberBetween(1,12)
            
        
        ];
    }
}
