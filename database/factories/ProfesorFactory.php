<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;
class ProfesorFactory extends Factory
{
    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Profesor::class;

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
            'telefono'=> $this->faker-> phoneNumber(),
            'identidad'=> $this->faker->ean13(),
            'direccion'=>$this->faker-> address(),
            'correo' => $this->faker->unique()->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
            'hora_entrada'=>$this->faker->time($format = 'H:i:s', $max = 'now'),
            'hora_salida'=>$this->faker->time($format = 'H:i:s', $max = 'now')
        
        ];
    }
}
