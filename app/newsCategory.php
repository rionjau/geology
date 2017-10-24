<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsCategory extends Model
{

    
    /**
    *
    * As set below, all the attributes of the newCategory model can be mass assigned
    *
    */

    protected $guarded = []; // no attribute is guarded against mass-assignment


    /**
    *
    * The inverse relationship to the news table via the joining table
    *
    */

    public function nCategory ()
    {
        return $this->hasMany('App\nCategory');
    }
}
