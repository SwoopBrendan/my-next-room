<?php namespace App\Services;

use App\Extra;
use App\GreaterArea;
use App\Location;
use App\Requirement;

/**
 * Class Service
 * @package App\Services
 */
class Service
{
    /**
     * Get All Extras
     *
     * @return Extra[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getExtras()
    {
        return Extra::all();
    }

    /**
     * Get All Requirements
     *
     * @return Requirement[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getRequirements()
    {
        return Requirement::all();
    }

    /**
     * Get all greater areas
     *
     * @return GreaterArea[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getGreaterAreas()
    {
        return GreaterArea::all();
    }

    /**
     * Get all locations or locations by greater area
     *
     * @param null $greaterAreaId
     * @return Location[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getLocations($greaterAreaId = null)
    {
        if ($greaterAreaId)
        {
            return Location::where('greater_area_id', $greaterAreaId)->get();
        }

        return Location::all();
    }
}