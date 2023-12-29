<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }

        Livewire::setScriptRoute(function ($handle) {
            
            return Route::get('/livewire/livewire.js', $handle);
        });

        Config::set('openai.token',env('OPENAI_TOKEN'));
        Config::set('difu_token', env('DIFUSSION_TOKEN'));

    }
    
}
