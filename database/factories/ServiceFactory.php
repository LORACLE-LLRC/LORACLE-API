<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDTHEME' => $this->faker->numberBetween($min = 1, $max = 5),
            'INTITULE' => $this->faker->word,
            'DESCRIPTIFSERVICE' => $this->faker->sentence($nbWords = 12, $variableNbWords = true),
            'VILLESERVICE' => $this->faker->city,
            'PHOTOSERVICE' => $this->faker->mimeType,
            'DATEHDEB' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'DATEHFIN' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
