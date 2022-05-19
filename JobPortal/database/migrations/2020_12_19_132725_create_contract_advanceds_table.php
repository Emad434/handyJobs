<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractAdvancedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_advanceds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users');

            $table->bigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('id')->on('users');

            $table->bigInteger('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('users');

            $table->string('status');
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
        Schema::dropIfExists('contract_advanceds');
    }
}
