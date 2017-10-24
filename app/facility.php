<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facility extends Model
{


    /**
    *
    * All the attributes of the facility model can be mass assigned
    *
    */

    protected $guarded = [ ]; // empty guarded array



     

    /**
    *
    * The relationship to the equipments table
    *
    */

    public function equipment ()
    {
        return $this->hasMany('App\equipment');
    }
}
