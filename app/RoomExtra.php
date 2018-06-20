<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomExtra extends Model
{
    public function extra()
    {
        return $this->hasOne('App\Extra', 'id', 'extra_id');
    }
}
