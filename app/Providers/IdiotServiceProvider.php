<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IdiotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       $data = array();
       $data[0] = "Ok";
       $data[1] = "Sweet 18";
       $data[2] = 17;
       $data[3] = 4;

       view()->share('dat_num', $data);
    }
}
