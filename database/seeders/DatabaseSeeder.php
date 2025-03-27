<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory(10)->create();

        User::factory()->create([
            'client' => 'testeCliente',
            'date' => now()->subDays(random_int(1, 30))->format('Y-m-d'),
            'time' => now()->format('H:i:s'),
            'salesperson' => 'testeSales',
            'description' => 'testeDescription',
            'amount' => random_int(10, 1000),
            'phone' => '33999120838',
        ]);
    }
}
