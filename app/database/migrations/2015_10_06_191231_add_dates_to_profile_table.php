<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatesToProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('city');	
			$table->string('state');		
			$table->integer('zip_code');
			$table->timestamps();
		});
		Schema::table('profiles', function(Blueprint $table)
		{
			$table->timestamps();
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profiles', function(Blueprint $table)
		{
			//
		});
	}

}
