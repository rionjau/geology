<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
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
}
