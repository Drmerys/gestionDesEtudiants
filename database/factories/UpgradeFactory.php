<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class UpgradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $students = Student::pluck('id')->toArray();
        return [
            "matter" => $this->faker->macProcessor(),
            "upgrade" => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
            "date" => $this->faker->dateTime(),
            "average" => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
            "student_id" => $this->faker->randomElement($students),
        ];
    }
}
