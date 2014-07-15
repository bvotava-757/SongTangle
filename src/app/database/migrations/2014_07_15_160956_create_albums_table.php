<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user');
			$table->string('title');
			$table->string('description');
			$table->integer('likes');
			$table->text('likers');
			$table->dateTime('create_date');
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
		Schema::table('albums', function(Blueprint $table)
		{
			$table->drop('albums');
		});
	}

}
