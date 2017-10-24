<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\sCategory;

class staff extends Model
{
    protected $guarded = []; // all the attributes can be set

    public function sCategory()
    {
        return $this->hasMany('App\sCategory');
    }
}
