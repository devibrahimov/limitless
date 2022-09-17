<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {}

    /**
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('favicon', static function ($expression)
        {
            return "<link rel='shortcut icon' href='{{ asset($expression) }}'>";
        });

        Blade::directive('font', static function ($expression)
        {
            return "<link rel='stylesheet' href='{{ $expression }}'>";
        });

        Blade::directive('css', static function ($expression)
        {
            return "<link rel='stylesheet' type='text/css' href='{{ asset($expression) }}'>";
        });

        Blade::directive('js', static function ($expression)
        {
            return "<script src='{{ asset($expression) }}'></script>";
        });
    }
}
