<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sCategory extends Model
{
    /**
    *
    *The reverse to the users/ staff table
    *
    */

    public function User()
    {
        return $this->belongsTo('App\User'); 
    }


    /**
    *
    * The reverse to the staffCategory table
    *
    */

    public function staffCategory()
    {
        return $this->belongsTo('App\staffCategory'); 
    }

    
}
