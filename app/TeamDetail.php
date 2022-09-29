<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
   protected $fillable = [
      'teams_id', 'events_id', 'nama', 'role', 'no_hp', 'email', 'image','idgame'
   ];

   //relasi 1-1 with table teams
   public function team()
   {
      return $this->belongsTo('App\Team', 'teams_id');
   }

   //relasi 1-1 with table events
   public function event()
   {
      return $this->belongsTo('App\Event', 'events_id');
   }

}
