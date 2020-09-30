<?php

namespace App\Providers;

use App\Repositories\UserCustomerRepository;
use App\Repositories\UserCustomerRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserCustomerRepositoryInterface::class, UserCustomerRepository::class);
    }
}
