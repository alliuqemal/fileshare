<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Exception;

class InstanceServiceProvider extends ServiceProvider
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
     * @throws Exception
     */
    public function boot()
    {
//        $this->app->instance(ProductService::class,
//            new ProductService(
//                new ProductRepository($this->app)
//            )
//        );
    }
}
