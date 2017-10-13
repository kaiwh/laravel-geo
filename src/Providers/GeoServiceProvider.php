<?php

namespace Kaiwh\Geo\Providers;

class GeoServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $commands = [
        'Kaiwh\Geo\Commands\GeoInstallCommand',
    ];

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../route.php');
    }

    public function register()
    {
        $this->commands($this->commands);

        $this->app->singleton('kaiwh_laravel_geo', function () {
            return new \Kaiwh\Geo\GeoManager();
        });
    }
}
