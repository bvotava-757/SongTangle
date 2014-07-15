<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('share_id');
			$table->integer('user');
			$table->string('status_message');
			$table->integer('likes');
			$table->text('likers');
			$table->dateTime('created_date');
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
		Schema::table('status', function(Blueprint $table)
		{
			$table->drop('status');
		});
	}

}
