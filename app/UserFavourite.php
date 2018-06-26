<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFavourite extends Model
{
    /**
     * User Favourite User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    /**
     * User Favourite Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Room', 'id', 'room_id');
    }
}
