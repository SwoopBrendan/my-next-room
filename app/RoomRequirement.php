<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomRequirement extends Model
{
    public function requirement()
    {
        return $this->hasOne('App\Requirement', 'id', 'requirement_id');
    }
}
