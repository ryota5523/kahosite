<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
        putenv('PANTHER_CHROME_DRIVER_BINARY=' . env('PANTHER_CHROME_DRIVER_BINARY'));
        if (env('DB_CONNECTION') === 'sqlite') {
            DB::connection()->getPdo()->exec('PRAGMA journal_mode=WAL;');
        }
    }
}
