<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestRegistrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guest_registration', function(Blueprint $table)
		{
			$table->integer('personal_id')->unique();
			$table->string('title', 5);
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('country_code', 3);
			$table->string('sex', 1);
			$table->string('comments', 500);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guest_registration');
	}

}
