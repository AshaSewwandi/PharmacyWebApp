<?php

namespace App\Providers;
use App\Policies\CustomerPolicy;
use App\Policies\ItemPolicy;
use App\Models\Customer;
use App\Models\Item;
use App\Models\User;
use Auth;

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
        Customer::class => CustomerPolicy::class,
        Item::class => ItemPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Add-Item', [ItemPolicy::class, 'create']);
        Gate::define('Add-Customer', [CustomerPolicy::class, 'create']);
        Gate::define('Edit-Customer', [CustomerPolicy::class, 'update']);
        Gate::define('Delete-Customer', [CustomerPolicy::class, 'delete']);
        Gate::define('Edit-Item', [ItemPolicy::class, 'update']);
        Gate::define('Delete-Item', [ItemPolicy::class, 'delete']);
    }
}
