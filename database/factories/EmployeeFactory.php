<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name(),
            'nickName' => $this->faker->userName(),
            'cpf' => $this->faker->numerify('###########'),
            'birthDate' => $this->faker->date(),
            'role' => $this->faker->word
        ];
    }
}