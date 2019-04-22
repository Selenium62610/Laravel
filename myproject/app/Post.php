<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //La table associé au model
    protected $table ='posts';    

   /**
    * Get the user that authored the post.
    */
   public function author()
   {

       return $this->belongsTo('App\User','post_author');
   }


}
