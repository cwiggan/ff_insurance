<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('grand_stands');
			$table->integer('grand_stand_number')->nullable();
			$table->string('grand_type')->nullable();
			$table->boolean('bleachers');
			$table->boolean('platforms');
			$table->string('type_of_contrunction');
			$table->string('type_of_railings');
			$table->integer('quote_id')->unsigned();
			$table->foreign('quote_id')->references('id')->on('insurance_quote');
		});

		Schema::create('other_activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('spectator_ridess');
			$table->string('spectator_rides_desc')->nullable();
			$table->boolean('infladibles');
			$table->string('infladibles_desc')->nullable();
			$table->boolean('concessions');
			$table->boolean('concessions_insurance');
			$table->string('concessions_insurance_limit')->nullable();
			$table->boolean('waiviers');
			$table->string('waiviers_activity')->nullable();
			$table->integer('quote_id')->unsigned();
			$table->foreign('quote_id')->references('id')->on('insurance_quote');
		});
		Schema::create('security_and_medical', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('evacuation_plan');
			$table->boolean('ambulences');;
			$table->boolean('medical_employed');
			$table->boolean('security_safety_material');
			$table->string('security_measures');
			$table->string('security_personnel');
			$table->string('security_provider');;		
			$table->boolean('security_insurance');
			$table->string('security_insurance_desc')->nullable();
			$table->boolean('crime');
			$table->integer('quote_id')->unsigned();
			$table->foreign('quote_id')->references('id')->on('insurance_quote');
		});
		Schema::create('additional_insure', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->integer('zip_code');
			$table->integer('quote_id')->unsigned();
			$table->foreign('quote_id')->references('id')->on('insurance_quote');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('site_info');
		Schema::drop('other_activities');
		Schema::drop('security_and_medical');
		Schema::drop('additional_insure');
	}

}
