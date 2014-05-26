<?php

use Illuminate\Database\Migrations\Migration;

class InternshipDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('internship_details', function($table)
		{
			$table->increments('iid');
			$table->string('type', 128);
			$table->string('jobdesc', 128);
			$table->string('nointernswant', 128);
			$table->string('domain', 128);
			$table->string('elegibility', 128);
			$table->boolean('unrelated');
			$table->string('basicqualification', 128);
			$table->string('stipend', 128);
			$table->string('internshipperiod', 128);
			$table->date('start');
			$table->string('else', 256);
			
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
		Schema::drop('internship_details');
	}

}