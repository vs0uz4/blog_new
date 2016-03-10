<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call(UserTableSeeder::class);
		$this->call(TagTableSeeder::class);
		$this->call(PostTableSeeder::class);
		$this->call(PostTagTableSeeder::class);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		Model::reguard();
	}
}
