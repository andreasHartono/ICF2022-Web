<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamDetail extends Model
{
    protected $table = 'teams_detail';
   protected $fillable = [
      'teams_id', 'nama', 'role', 'no_hp', 'email', 'image','idgame'
   ];

   //relasi 1-1 with table teams
   public function team()
   {
      return $this->belongsTo('App\Team', 'teams_id');
   }
}
