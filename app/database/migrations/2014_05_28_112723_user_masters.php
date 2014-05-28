<?php

use Illuminate\Database\Migrations\Migration;

class UserMasters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('user_masters', function($table)
		{
			$table->increments('umid');
			$table->string('username', 128);
			$table->string('password', 128);
			$table->string('email', 128);
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
		Schema::drop('user_masters');
	}

}