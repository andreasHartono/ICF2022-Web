<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $table = 'events';
    protected $fillable = [
        'jenis_id', 'nama', 'tanggal_start', 'tanggal_end', 'deskripsi','lokasi','link_wa','author','term_condition'
    ];
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

   //relasi 1-M dengan table teams
   public function teams()
   {
      return $this->has_many('App\Team', 'events_id','id');
   }

   //relasi M-N dengan table users
   public function users()
   {
      return $this->belongsToMany('App\Users', 'user_event', 'events_id', 'users_id');
   }
}
