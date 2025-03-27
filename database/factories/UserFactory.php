<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client' => $this->faker->name,
            'date' => $this->faker->date('Y-m-d'),
            'time' => $this->faker->time('H:i:s'),
            'salesperson' => $this->faker->name,
            'description' => $this->faker->sentence(10),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
