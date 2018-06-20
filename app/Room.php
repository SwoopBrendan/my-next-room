<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'slug', 'description', 'length', 'width', 'deposit', 'rent', 'lease_term_min', 'lease_term_max',
        'available_from', 'available_to', 'room_count', 'bathroom_count', 'user_id', 'location_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * get room extras
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomExtras()
    {
        return $this->hasMany('App\RoomExtra', 'room_id', 'id');
    }

    /**
     * get requirements
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomRequirements()
    {
        return $this->hasMany('App\RoomRequirement');
    }

    /**
     * get room images
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomImages()
    {
        return $this->hasMany('App\RoomImage', 'room_id', 'id');
    }

    /**
     * get room location
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function roomLocation()
    {
        return $this->hasOne('App\Location', 'id', 'location_id');
    }
}
