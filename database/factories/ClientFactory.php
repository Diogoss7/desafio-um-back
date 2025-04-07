<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client' => $this->faker->name,
            'date' => $this->faker->date('Y-m-d'),
            'time' => $this->faker->time('H:i'),
            'salesperson' => $this->faker->name,
            'description' => $this->faker->sentence(10),
            'amount' => bcdiv($this->faker->randomFloat(2, 10, 1000), '1', 2),
            'phone' => preg_replace('/\D/', '', $this->faker->phoneNumber),
        ];
    }
}
