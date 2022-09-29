<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   protected $table = 'images';

   // relasi 1-1 dg table events
   public function event()
   {
      return $this->belongsTo('App\Event', 'events_id');
   }
}
