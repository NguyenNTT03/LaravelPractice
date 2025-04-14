<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\Product\ProductRepositoryInterface;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Repositories\User\UserRepositoryInterface;
use App\Http\Repositories\User\UserRepository;
use App\Http\Repositories\Order\OrderRepositoryInterface;
use App\Http\Repositories\Order\OrderRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}