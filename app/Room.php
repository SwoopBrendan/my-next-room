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
}
