<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Định nghĩa quyền manage-hotels
        Gate::define('manage-hotels', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('manage-tours', function ($user) {
            return $user->role === 'admin';
        });
        Gate::define('manage-locations', function ($user) {
            return $user->role === 'admin';
        });
    }
}
