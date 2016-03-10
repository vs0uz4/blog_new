<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id')->nullable();
			$table->string('title');
			$table->string('slug')->unique();
			$table->string('desc');
			$table->text('content');
			$table->timestamps();

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
		Schema::table('posts', function (Blueprint $table)
		{
			$table->dropForeign('posts_user_id_foreign');
		});

		Schema::drop('posts');
	}
}
