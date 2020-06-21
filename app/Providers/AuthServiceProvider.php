<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\Task;
use App\Policies\TaskPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Task::class => TaskPolicy::class,
        Group::class => GroupPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-task', 'App\Policies\TaskPolicy@create');
        Gate::define('update-task', 'App\Policies\TaskPolicy@update');
        Gate::define('delete-task', 'App\Policies\TaskPolicy@delete');

        Gate::define('edit-group', 'App\Policies\GroupPolicy@edit');

        Passport::routes(function ($router) {
            $router->forAccessTokens();
        });
    }
}
