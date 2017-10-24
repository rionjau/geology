<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nCategory extends Model
{
    /**
    *
    * The inverse relationship to the news table
    *
    */

    public function news ()
    {
        return $this->belongsTo('App\news');

    }

    /**
    *
    * The inverse relationship to the news_category table
    *
    */

    public function newsCategory ()
    {
        return $this->belongsTo('App\newsCategory');
    }
}
