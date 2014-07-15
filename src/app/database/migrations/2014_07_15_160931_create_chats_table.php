<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chats', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('from');
			$table->integer('to');
			$table->text('message');
			$table->dateTime('date_created');
			$table->dateTime('date_seen');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chats', function(Blueprint $table)
		{
			$table->drop('chats');
		});
	}

}
