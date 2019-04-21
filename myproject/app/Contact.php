<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
		
        protected $table = 'contact'; //Nom de la table concerné par cette classe
        public $timestamps = false; //Désactive la gestion des colonnes created_at et updated_at
}


