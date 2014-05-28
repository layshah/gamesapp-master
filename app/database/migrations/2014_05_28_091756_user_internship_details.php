<?php

use Illuminate\Database\Migrations\Migration;

class UserInternshipDetails extends Migration {

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
			$table->increments('uiid');
			$table->string('umid', 128);
			$table->string('desire', 128);
			$table->string('career', 128);
			$table->string('learn', 128);
			$table->string('domain', 128);
			$table->string('problem', 128);
			$table->string('solution', 128);
            $table->string('confusion', 128);
            		
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
		Schema::drop('user_internship_details');
	}

}