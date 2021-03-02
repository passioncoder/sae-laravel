<?php

namespace App\Providers;

use App\Models\Posting;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // https://laravel.com/docs/8.x/authorization#gates

        Gate::define('update-posting', function (User $user, Posting $posting) {

            return $user->id === $posting->user_id;
        });
    }
}
