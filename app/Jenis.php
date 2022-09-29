<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
   protected $table = 'jenis';

   // relasi 1-M with table events
   public function events()
   {
      return $this->hasMany('App\Event', 'jenis_id', 'id');
   }
}
