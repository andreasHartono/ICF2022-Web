<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'events';

   //relasi 1-1 dengan table jenis 
   public function jenis()
   {
      return $this->belongsTo('App\Jenis', 'jenis_id');
   }

   //relasi 1-M dengan table images
   public function images()
   {
      return $this->hasMany('App\Images', 'events_id', 'id');
   }

   //relasi 1-1 dengan table teams_detail
   public function teams_detail()
   {
      return $this->belongsTo('App\TeamsDetail', 'team_id');
   }

   //relasi M-N dengan table users
   public function users()
   {
      return $this->belongsToMany('App\Users', 'user_event', 'events_id', 'user_id');
   }
}
