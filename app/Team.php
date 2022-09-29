<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
      'users_id', 'nama_tim', 'instansi'
   ];
   //relasi 1-M dengan table teams_detail
   public function teamDetail()
   {
      return $this->hasMany('App\TeamDetail', 'events_id', 'id');
   }
   
   //relasi 1-1 dengan table users
   public function users()
   {
      return $this->belongsTo('App\User', 'users_id');
   }
}
