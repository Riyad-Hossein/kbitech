<?php

namespace App\Providers;

use App\Models\BusinessType;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        if (Schema::hasTable('business_types')) {
            $businessTypes = BusinessType::with('service_categories')->get();
            view()->share('businessTypes', $businessTypes);
        }
    }
}
