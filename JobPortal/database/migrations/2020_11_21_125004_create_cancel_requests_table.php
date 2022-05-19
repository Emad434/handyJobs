<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancel_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('req_from')->unsigned();
            $table->foreign('req_from')->references('id')->on('users');

            $table->bigInteger('reciever_id')->unsigned();
            $table->foreign('reciever_id')->references('id')->on('contracts');
            

            $table->bigInteger('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contracts');
            
            $table->text('description');
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
        Schema::dropIfExists('cancel_requests');
    }
}
