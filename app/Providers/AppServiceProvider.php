<?php

namespace App\Providers;

use App\Models\BusinessType;
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
        $businessTypes = BusinessType::with('service_categories')->get();
        view()->share('businessTypes', $businessTypes);
    }
}
