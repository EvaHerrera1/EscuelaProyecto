<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grado;
class GradoFactory extends Factory
{
    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Grado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grado' => $this->faker->numberBetween(1, 12),
            'seccion'=> $this->faker->randomElement($array = array('A', 'B')),
            'aula'=> $this->faker->randomDigit()

        ];
    }
}
