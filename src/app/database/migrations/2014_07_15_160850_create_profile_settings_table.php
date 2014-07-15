<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user');
			$table->text('settings');
			$table->dateTime('edit_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profile_settings', function(Blueprint $table)
		{
			$table->drop('profile_settings');
		});
	}

}
