<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEventTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('user_event', function (Blueprint $table) {
         $table->foreignId('users_id');
         $table->foreignId('events_id');
         $table->primary(['users_id', 'events_id']);

         $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
         $table->foreign('events_id')->references('id')->on('events')->onDelete('cascade');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('user_event');
   }
}
