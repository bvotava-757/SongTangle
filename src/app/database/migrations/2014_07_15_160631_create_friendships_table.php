<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friendships', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user1');
			$table->integer('user2');
			$table->boolean('flag_accepted')->default(false);
			$table->dateTime('accepted_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('friendships', function(Blueprint $table)
		{
			$table->drop('friendships');
		});
	}

}
