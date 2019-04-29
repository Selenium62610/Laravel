<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Controller des articles
class Articles extends Model
{
    //La table associé au model
    // Article et contact on été inversé

    protected $table ='articles2';
    public $timestamps = false;

}
