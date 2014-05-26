<?php

use Illuminate\Database\Migrations\Migration;

class Domains extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('domains', function($table)
		{
			$table->increments('did');
			$table->string('domain', 128);
			$table->string('pid', 12);
			
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
			Schema::drop('domains');
	}

}