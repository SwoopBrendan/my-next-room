<?php namespace App\Services;

use App\Extra;

/**
 * Class HomeService
 * @package App\Services
 */
class HomeService extends Service
{
    public function getExtras()
    {
        return Extra::all();
    }
}