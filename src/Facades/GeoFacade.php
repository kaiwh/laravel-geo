<?php

namespace Kaiwh\Geo\Facades;

use Illuminate\Support\Facades\Facade;

class GeoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'kaiwh_laravel_geo';
    }
}
