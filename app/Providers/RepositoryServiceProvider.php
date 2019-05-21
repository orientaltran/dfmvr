<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\Contracts\PostRepository::class, \App\Repositories\Eloquent\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ContactRepository::class, \App\Repositories\Eloquent\ContactRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PartnerRepository::class, \App\Repositories\Eloquent\PartnerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ProjectRepository::class, \App\Repositories\Eloquent\ProjectRepositoryEloquent::class);
        //:end-bindings:
    }
}
