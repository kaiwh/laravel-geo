<?php
namespace Kaiwh\Geo\Controllers;

use App\Http\Controllers\Controller;
use Cache;
use Geo;

class GeoController extends Controller
{

    public function index()
    {
        // Cache::forget('geos');
        return response()->json(
            Cache::rememberForever('geos', function () {
                $data = [];
                $data['province'] = [];
                foreach (Geo::provinces() as $value) {
                    $data['province'][$value->id] = $value->name;
                }

                $data['city'] = [];
                foreach (Geo::cities() as $value) {
                    $data['city'][$value->province_id][$value->id] = $value->name;
                }

                $data['district'] = [];
                foreach (Geo::districts() as $value) {
                    $data['district'][$value->province_id][$value->city_id][$value->id] = $value->name;
                }
                return $data;
            })
        );
    }
}
