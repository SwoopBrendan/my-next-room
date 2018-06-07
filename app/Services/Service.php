<?php namespace App\Services;

use App\Extra;
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
}