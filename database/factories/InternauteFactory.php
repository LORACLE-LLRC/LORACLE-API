<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InternauteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NOMINTER' => $this->faker->lastName,
            'PRENOMINTER' => $this->faker->firstName,
            'EMAILINTER' => $this->faker->email,
            'MDPINTER' => $this->faker->word,
            'TELINTER' => $this->faker->e164PhoneNumber,
            'ADRESSEINTER' => $this->faker->address ,
            'DATENAISSINTER' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'CREDIT' => $this->faker->randomNumber($nbDigits = NULL, $strict = false)
        ];
    }
}
