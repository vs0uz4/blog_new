<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_tag', function (Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('post_id');
			$table->unsignedInteger('tag_id');
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('CASCADE');
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post_tag', function (Blueprint $table)
		{
			$table->dropForeign('post_tag_post_id_foreign');
			$table->dropForeign('post_tag_tag_id_foreign');
		});
		Schema::drop('post_tag');
	}
}
