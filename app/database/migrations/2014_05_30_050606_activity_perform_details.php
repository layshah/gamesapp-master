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
		Schema::create('user_internship_details', function($table)
		{
			$table->increments('id');
			$table->string('activityid', 128);
			$table->string('userid', 128);
			$table->string('submit', 128);
					
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
		Schema::drop('activity_perform_details');
	}

}