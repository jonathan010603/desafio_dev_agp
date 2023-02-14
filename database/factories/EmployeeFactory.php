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
            'fullname' => $this->faker->name(),
            'nickname' => $this->faker->regexify('[A-Za-z0-9]{' . mt_rand(8, 12) . '}'),
            'cpf' => $this->faker->numerify('###########'),
            'birthdate' => $this->faker->dateTimeBetween('-120 years', '-18 years'),
            'role' => $this->faker->word()
        ];
    }
}