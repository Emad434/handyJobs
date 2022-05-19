<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation_points', function (Blueprint $table) {
            $table->id();
               $table->bigInteger('conversation_start_from')->unsigned();
            $table->foreign('conversation_start_from')->references('id')->on('users');


             $table->bigInteger('reciever_id')->unsigned();
            $table->foreign('reciever_id')->references('id')->on('users');
           
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
        Schema::dropIfExists('conversation_points');
    }
}
