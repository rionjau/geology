<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    /**
    *
    * The relationship to the research_program table via the joining table
    *
    */

    public function rParticipant ()
    {
        return $this->hasMany('App\rParticipant');
    }
}
