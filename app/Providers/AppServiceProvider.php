<?php

namespace App\Providers;

use App\Listeners\SetTenantIdInSession;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Laravel\Cashier\Cashier;

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


        Event::listen(
            SetTenantIdInSession::class,
            'handle'
        );


        Cashier::calculateTaxes();
    }
}