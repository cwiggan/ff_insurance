<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToInsuranceOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('insurance_options', function(Blueprint $table)
		{
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('insurance_type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('insurance_options', function(Blueprint $table)
		{
			//
		});
	}

}
