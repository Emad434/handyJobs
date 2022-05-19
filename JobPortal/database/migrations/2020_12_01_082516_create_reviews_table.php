<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('id')->on('users');


            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users');
            
            $table->bigInteger('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contracts');
            
            $table->bigInteger('stars')->unsigned();
            
            $table->text('review');
            
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
        Schema::dropIfExists('reviews');
    }
}
