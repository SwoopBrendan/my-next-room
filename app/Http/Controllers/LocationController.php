<?php namespace App\Http\Controllers;

use App\Services\LocationService;

class LocationController extends Controller
{
    /**
     * LocationController constructor.
     * @param LocationService $service
     */
    public function __construct(LocationService $service)
    {
        $this->service = $service;
    }

    public function getLocations($greaterAreaId)
    {
        return json_encode($this->service->getLocations($greaterAreaId));
    }
}
