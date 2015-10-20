<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropdownValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dropdown_values', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('value');
			$table->integer('dropdown_id')->unsigned();
			$table->foreign('dropdown_id')->references('id')->on('dropdowns');
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
