<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Observers\PostObserver;
use App\Observers\ProfileObserver;
use App\Models\PostArticle; 
use App\Employees; 
class AppServiceProvider extends ServiceProvider
{ 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */ 

    
    public function boot()
    {
        // PostArticle::observe(PostObserver::class);
        // Employees::observe(ProfileObserver::class);
        // Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
