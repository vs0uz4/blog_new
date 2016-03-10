<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tags')->truncate();

		Tag::create(['name' => 'tag1',]);
		Tag::create(['name' => 'tag2',]);
		Tag::create(['name' => 'tag3',]);
	}
}
