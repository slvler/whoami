<?php

namespace Slvler\Whoami;

use Illuminate\Support\ServiceProvider;

class WhoamiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('whoami', function ($app) {
            return new WhoamiManager($app);
        });
    }

}
