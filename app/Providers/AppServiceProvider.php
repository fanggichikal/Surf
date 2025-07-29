<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryIsland;
use Illuminate\Support\Facades\View;

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
        View::share('categoryIslands', CategoryIsland::take(5)->get());
    }
}
