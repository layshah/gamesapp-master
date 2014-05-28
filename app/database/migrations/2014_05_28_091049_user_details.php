<?php

use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('user_details', function($table)
		{
			$table->increments('udid');
			$table->string('umid');
			$table->string('name', 128);
			$table->string('internshipduration', 128);
			$table->string('collage', 128);
			$table->string('degree', 128);
			$table->string('semester', 128);
			$table->string('contactno', 128);
			$table->string('aboutyou', 128);
            $table->string('aboutprojects', 128);
            $table->string('experience', 128);
            $table->string('toolstech', 128);		
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
		Schema::drop('user_details');
	}

}