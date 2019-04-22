<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //La table associé au model
    protected $table ='posts';
    public $timestamps = false;
}
