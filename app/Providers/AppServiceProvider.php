<?php

namespace App\Providers;

use App\Models\MedicalImaging;
use App\Observers\ImageObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        MedicalImaging::observe(ImageObserver::class);
    }
}
