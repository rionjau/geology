<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventCategory extends Model
{
    /**
    *
    * As set below, all the attributes of the model can be mass assigned
    *
    */

    protected $guarded = [ ]; 


    /**
    *
    * The inverse relationship to the events table via the joining table 
    *
    */

    public function eCategory ()
    {
        return $this->hasMany('App\eCategory');
    }
}
