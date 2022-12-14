<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {}

    public function boot()
    {
        Schema::defaultStringLength(255);
        date_default_timezone_set('Asia/Baku');

        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        Paginator::useBootstrap();
//        Paginator::defaultView('simple-default');

    }
}
