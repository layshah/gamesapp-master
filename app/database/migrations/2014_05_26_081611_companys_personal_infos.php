<?php

use Illuminate\Database\Migrations\Migration;

class CompanysPersonalInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('companys_personal_infos', function($table)
		{
			$table->increments('cid');
			$table->string('cname', 128);
			$table->string('Email', 128);
			$table->string('contactno', 128);
			$table->string('cculture', 128);
			$table->string('cdomain', 128);		
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
		Schema::drop('companys_personal_infos');
	}

}