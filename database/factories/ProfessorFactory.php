<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "lastName" => $this->faker->lastName(),
            "firstName" => $this->faker->firstName(),
            "age" => $this->faker->date(),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
        ];
    }
}
