<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Controller des articles
class Articles extends Model
{
    //La table associé au model

    protected $table ='articles';
    public $timestamps = false;

}
