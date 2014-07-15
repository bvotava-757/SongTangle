<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('user_group');
			$table->string('password');
			$table->string('alias');
			$table->string('email_address');
			$table->text('about');
			$table->text('address');
			$table->text('interests');
			$table->dateTime('register_date');
			$table->dateTime('last_login_date');
			$table->dateTime('password_reset_expiration');
			$table->boolean('flag_allow_email')->default(true);
			$table->boolean('flag_allow_text')->default(true);
			$table->boolean('flag_allow_chat')->default(true);
			$table->boolean('flag_status')->default(true);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->drop('users');
		});
	}

}
