<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use App\Models\apartment;
use App\Models\voting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::default');

        Gate::define("destroy-apartment", function (User $user, apartment $Apartment) {
            return $user->id === 1;

        });
        Gate::define("destroy-voting", function (User $user, voting $Voting) {
            return $user->id === 1;

        });
        Gate::define("edit-voting", function (User $user, voting $Voting) {
            return $user->id === 1;

        });
    }
}
