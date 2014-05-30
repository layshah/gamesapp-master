<?php

use Illuminate\Database\Migrations\Migration;

class ActivityMasters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('activity_masters', function($table)
		{
			$table->increments('activityid');
			$table->string('activitytitle',128);
			$table->string('description', 256);
			$table->string('domain', 128);
					
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
		Schema::drop('activity_masters');
	}

}