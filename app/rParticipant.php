<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rParticipant extends Model
{
    /**
    *
    * The inverse relationship to the research_program table
    *
    */

    public function researchProgram()
    {
        return $this->belongsTo('App\researchProgram');
    }


    /**
    *
    * The inverse relationship to the participants table
    *
    */

    public function participant ()
    {
        return $this->belongsTo('App\participant');
    }
}
