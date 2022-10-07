<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
   protected $fillable = [
      'users_id','events_id' , 'nama_tim', 'instansi','status','keterangan','file_jawaban'
   ];
   //relasi 1-M dengan table teams_detail
   public function teamDetail()
   {
      return $this->hasMany('App\TeamDetail', 'teams_id', 'id');
   }

   //relasi 1-1 dengan table users
   public function users()
   {
      return $this->belongsTo('App\User', 'users_id');
   }

      //relasi 1-1 with table events
      public function event()
      {
         return $this->belongsTo('App\Event', 'events_id');
      }

}
