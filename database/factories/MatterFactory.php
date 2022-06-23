<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $professor = Professor::pluck('id')->toArray();
        return [
            "matter" => $this->faker->macProcessor(),
            "professor_id" => $this->faker->randomElement($professor),
        ];
    }
}
