<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //La table associé au model
    //les articles
    protected $table ='posts';	    

   /**
    * Get the user that authored the post.
    */
   public function author()
   {
       //retourne le post appartenant à l'utilisateur pour cela nous utilisons la clé étrangère post_author
       //Eloquent traduit cela à quels users sont en relation avec ce post
       return $this->belongsTo('App\User','post_author');
   }


}
