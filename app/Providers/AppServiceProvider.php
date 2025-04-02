<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            DB::connection()->getPdo();
            Log::info('Conexão com o banco de dados estabelecida com sucesso.');
        } catch (\Exception $e) {
            Log::error('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }
}
