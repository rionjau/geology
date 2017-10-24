<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffCategory extends Model
{
    /**
    *
    * The relationship to the user / staff thru the joining table
    *
    */

    public function sCategory()
    {
        return $this->hasMany('App\sCategory'); 
    }
}
