<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    /**
    *
    * The inverse relationship to the facility table
    *
    */

    public function facility ()
    {
        return $this->belongsTo('App\facility');
    }
}
