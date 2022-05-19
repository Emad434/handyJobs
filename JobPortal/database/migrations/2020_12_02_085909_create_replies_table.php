<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->id();

             $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users');

            $table->text('replys');

            $table->bigInteger('parent_comment')->unsigned();
            $table->foreign('parent_comment')->references('id')->on('reviews');
            
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
        Schema::dropIfExists('replies');
    }
}
