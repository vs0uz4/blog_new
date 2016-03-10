<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id')->nullable();
			$table->string('name');
			$table->unsignedTinyInteger('level');

			$table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('skills', function (Blueprint $table)
		{
			$table->dropForeign('skills_user_id_foreign');
		});

		Schema::drop('skills');
	}
}
