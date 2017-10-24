<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    /**
    *
    * As set below, all the attributes of the model can be mass-assigned
    *
    */

    protected $guarded = []; 



    /**
    *
    * The relationship to the event_category table via the joining table
    *
    */

    public function eCategory()
    {
        return $this->hasMany('App\eCategory');
    }

    /**
    *
    * The relationship to the albums table
    *
    */

    public function album ()
    {
        return $this->hasMany('App\album');
    }
}
