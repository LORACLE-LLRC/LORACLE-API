<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDINTERNAUTEP' => $this->faker->numberBetween($min = 1, $max = 101),
            'IDINTERNAUTER' => $this->faker->numberBetween($min = 1, $max = 101),
            'NUMSERVICE' => $this->faker->numberBetween($min = 1, $max = 201),
            'LIBELLEREP' => $this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'DATEREPONSE' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
