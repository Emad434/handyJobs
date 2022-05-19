<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_details', function (Blueprint $table) {
            $table->id();
            $table->string('blog_text');
           
            $table->bigInteger('tag_ids')->unsigned();
              $table->foreign('tag_ids')->references('id')->on('blog_tags');
            
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
        Schema::dropIfExists('blog_details');
    }
}
