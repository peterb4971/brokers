<?php

namespace App\Providers;

use App\Builders\JsonResponseBuilder;
use App\Contracts\Builders\ResponseBuilderInterface;
use Illuminate\Support\ServiceProvider;

class BuildersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            ResponseBuilderInterface::class,
            JsonResponseBuilder::class
        );
    }
}
