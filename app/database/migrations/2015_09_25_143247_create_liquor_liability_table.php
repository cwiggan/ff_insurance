<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiquorLiabilityTable extends Migration {

	/**
	 * Run the migrations.
	 *liquor_provider
	 * @return void
	 */
	public function up()
	{
		Schema::create('liquor_liability', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('serve_by');
			$table->boolean('liquor_coverage');
			$table->string('name_on_license')->nullable();
			$table->boolean('provide_coverage');
			$table->string('type_sold');
			$table->string('expected_gross_sale');
			$table->string('last_year_gross_sale');
			$table->boolean('fined');
			$table->boolean('revoke_suspened');
			$table->boolean('claim');
			$table->boolean('servers_trained');
			$table->longText('servers_trained_desc')->nullable();
			$table->boolean('refusing_to_serve');
			$table->longText('refusing_to_serve_desc')->nullable();
			$table->longText('id_check');
			$table->longText('drink_limit');
			$table->longText('opening_closing_hours');
			$table->boolean('outside_alcohol');
			$table->longText('outside_alcohol_desc')->nullable();
			$table->integer('quote_id')->unsigned();
			$table->foreign('quote_id')->references('id')->on('insurance_quote');			
		});
		Schema::create('loss_history', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('bankruptcy_lien');
			$table->boolean('insurance_cancel_decline');
			$table->longText('insurance_cancel_decline_desc')->nullable();
			$table->boolean('claims_lose');
			$table->longText('claims_lose_desc')->nullable();
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
		Schema::drop('liquor_liability');
		Schema::drop('loss_history');
	}

}
