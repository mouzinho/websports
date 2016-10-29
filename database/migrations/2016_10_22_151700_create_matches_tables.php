<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matches', function (Blueprint $table){
         $table->increments('id');
         $table->dateTime('date');
         $table->integer('home_id')->unsigned();
         $table->integer('home_score');
         $table->integer('away_id')->unsigned();
         $table->integer('away_score');
         $table->enum('status', ['scheduled', 'ongoing', 'done','cancelled']);
         
         $table->foreign('home_id')->references('id')->on('teams');
         $table->foreign('away_id')->references('id')->on('teams');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
