<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eCategory extends Model
{
    /**
    *
    * The inverse relationship to the events table
    *
    */

    public function event ()
    {
        return $this->belongsTo('App\event');
    }

    /**
    *
    * The inverse relationship to the eventsCategory table
    *
    */

    public function eventCategory ()
    {
        return $this->belongsTo('App\eventCategory');
    }
}
