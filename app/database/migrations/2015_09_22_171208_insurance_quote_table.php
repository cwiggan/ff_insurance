<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsuranceQuoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('insurance_quote', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('location_name');
            $table->string('location_address');
            $table->string('location_address2');
            $table->string('location_city');
            $table->string('location_state');
            $table->string('location_zipcode');
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
