<?php

namespace App\Providers;

use App\Repositories\Sport\SportRepository;
use App\Repositories\Sport\SportRepositoryInterface;
use App\Repositories\Sport\UserSportRepository;
use App\Repositories\UserSport\UserSportRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->singleton(SportRepositoryInterface::class, SportRepository::class);
        $this->app->singleton(UserSportRepositoryInterface::class, UserSportRepository::class);
        //
    }
}
