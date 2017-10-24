<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    /**
    *
    * As set above, the attributes of the model can be mass assigned
    *
    */

    protected $guarded = [ ]; 

    /**
    *
    * The relationship to the news_category table via the joining table
    *
    */

    public function nCategory ()
    {
        return $this->hasMany('App\nCategory');
    }

}
