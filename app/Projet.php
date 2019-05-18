<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
   public function user() {
       return $this->belongsTo('App\User');
   }
}
