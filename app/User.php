<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   use Notifiable;

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name', 'email', 'no_hp', 'password',
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
      'password', 'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   //relasi 1-M dengan table teams
   public function teams()
   {
      return $this->hasMany('App\Team', 'users_id', 'id');
   }

   //relasi M-N dengan table events
   public function events()
   {
      return $this->belongsToMany('App\Events', 'user_event', 'users_id', 'events_id');
   }
}
