<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

      Gate::resource('posts', 'App\Policies\PostPolicy');
      Gate::resource('users', 'App\Policies\UserPolicy');
      Gate::resource('roles', 'App\Policies\RolePolicy');
      Gate::resource('permissions', 'App\Policies\PermissionPolicy');
    
     Gate::resource('tags', 'App\Policies\TagPolicy');
     Gate::resource('categories', 'App\Policies\CategoryPolicy');
     
       
    }
}
