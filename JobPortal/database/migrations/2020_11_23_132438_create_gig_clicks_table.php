<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigClicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gig_clicks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('click_by')->unsigned();
            $table->foreign('click_by')->references('id')->on('users');

            $table->bigInteger('gig_id')->unsigned();
            $table->foreign('gig_id')->references('id')->on('gigs');
           
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
        Schema::dropIfExists('gig_clicks');
    }
}
