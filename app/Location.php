<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * get location greater area
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function locationGreaterArea()
    {
        return $this->hasOne('App\GreaterArea', 'id', 'greater_area_id');
    }
}
