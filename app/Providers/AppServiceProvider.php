<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        //
    ];

    public function boot(): void
    {
        // Gate to check if the user is a super-admin for user management.
        Gate::define('manage-users', function (User $user) {
            return $user->hasRole('super-admin');
        });

        // Gate to check if the user is an admin or super-admin for dashboard access.
        Gate::define('access-dashboard', function (User $user) {
            return $user->hasRole(['admin', 'super-admin']);
        });
    }
}