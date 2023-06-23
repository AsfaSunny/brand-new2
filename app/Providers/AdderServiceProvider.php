<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        app()->bind('adder', function(){
            return new \App\RepoTesetories\Adder;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
