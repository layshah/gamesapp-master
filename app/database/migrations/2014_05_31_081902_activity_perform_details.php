<?php

use Illuminate\Database\Migrations\Migration;

class ActivityPerformDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('activity_perform_details', function($table)
		{
			$table->increments('id');
			$table->string('activityid',128);
			$table->string('userid', 256);
			$table->string('submit', 128);
			$table->unique( array('activityid','userid') );		
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
		Schma::drop('activity_perform_details');
	}

}