<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('music', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user');
			$table->string('path');
			$table->string('title');
			$table->string('playtime');
			$table->integer('likes');
			$table->text('likers');
			$table->boolean('flag_explicit')->default(false);
			$table->boolean('flag_status')->default(true);
			$table->dateTime('create_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('music', function(Blueprint $table)
		{
			$table->drop('music');
		});
	}

}
