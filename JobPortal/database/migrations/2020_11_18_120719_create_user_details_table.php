<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
           $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('profession');
            $table->string('location');
            $table->string('minimum_rate');
            $table->string('resume_category');
            $table->string('skills');
            $table->string('city');
            $table->string('intro');
            $table->string('school_name');
            $table->string('qualification');
            $table->string('school_start_date');
            $table->string('schol_end_date');
            $table->string('employer');
            $table->string('job_title');
            $table->string('jobstart_date');
            $table->string('jobend_date');
            $table->string('passport_size_pic');
            $table->string('resume');
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
        Schema::dropIfExists('user_details');
    }
}
