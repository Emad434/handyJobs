<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');
            $table->string('has_company');
            $table->bigInteger('total_amount_of_employer')->null();
            $table->string('from_which_department_you_from')->null();
            $table->string('bussines_number')->null();
            $table->string('company_intro')->null();
            $table->string('company_adres')->null();

            $table->string('home_addres1')->null();
            $table->string('home_addres2')->null();
            $table->string('personal_phone')->null();

            
            
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
        Schema::dropIfExists('company_details');
    }
}
