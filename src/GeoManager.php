<?php

namespace Kaiwh\Geo;

class GeoManager
{
    public function provinces()
    {
        return \Kaiwh\Geo\Models\GeoProvince::where('status',1)->get();
    }
    public function cities()
    {
        return \Kaiwh\Geo\Models\GeoCity::where('status',1)->get();
    }
    public function districts()
    {
        return \Kaiwh\Geo\Models\GeoDistrict::where('status',1)->get();
    }
}
