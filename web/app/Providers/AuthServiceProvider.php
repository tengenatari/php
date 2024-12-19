<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Card;
use App\Models\User;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('update-card', function (User $user, Card $card) {
            return ($user->id === $card->user_id or $user->is_admin);
        });
        Gate::define('delete-card', function (User $user, Card $card) {
            return ($user->id === $card->user_id or $user->is_admin);
        });
        Gate::define('restore-card', function (User $user) {
            return ($user->is_admin);
        });
        Gate::define('create-card', function (User $user){
           return ($user === $user);
        });
        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }




    }
}
