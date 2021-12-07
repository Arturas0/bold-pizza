<?php

namespace App\Providers;

use App\Services\PhotoManageService;
use Illuminate\Support\ServiceProvider;

class PhotoManageServiceProvider extends ServiceProvider
{
    protected $extra;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PhotoManageService::class, function ($app) {
            return new PhotoManageService;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
