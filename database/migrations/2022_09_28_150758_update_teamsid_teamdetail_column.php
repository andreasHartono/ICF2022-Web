<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTeamsidTeamdetailColumn extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table('teams_detail', function (Blueprint $table) {
         $table->foreign('teams_id')->references('id')->on('teams');
         $table->foreign('events_id')->references('id')->on('events');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::table('teams_detail', function (Blueprint $table) {
         $table->dropForeign(['team_id','events_id']);
      });
   }
}
