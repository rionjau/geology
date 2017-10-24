<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class researchProgram extends Model
{
    /**
    *
    * The relationship to the participants table via the joining table
    *
    */

    protected $guarded = []; // all the attributes of the model can be mass assigned

    public function rParticipant ()
    {
        return $this->hasMany('App\rParticipant');
    }
}
