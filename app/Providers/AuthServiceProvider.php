<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy'
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::before(static function ($user, $ability) {
            return $user->hasRole('Developer') ? true : null;
        });
    }
}
