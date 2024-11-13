<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\OTPService;
use App\Repos\OTPRepo;
use App\Services\MailService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
