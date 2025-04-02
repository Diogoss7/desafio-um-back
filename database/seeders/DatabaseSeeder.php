<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Client::factory(10)->create();

        Client::factory()->create([
            'client' => 'testeCliente',
            'date' => now()->subDays(random_int(1, 30))->toDateString(),
            'time' => now()->toTimeString(),
            'salesperson' => 'testeSales',
            'description' => 'testeDescription',
            'amount' => bcdiv(random_int(10, 1000), '1', 2),
            'phone' => preg_replace('/\D/', '', '33999120838'),
        ]);
    }
}
