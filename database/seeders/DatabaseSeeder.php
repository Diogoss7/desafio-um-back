<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([

            'client' => 'testeCliente',
            'date' => now()->subDays(random_int(1, 30))->format('Y-m-d'),
            'time' => now()->format('H:i:s'),
            'salesperson' => 'testeSales',
            'description' => 'testeDescription',
            'amount' => random_int(10, 1000),
        ]);
    }
}
