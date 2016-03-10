<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->truncate();

		User::create([
			'name'     => 'Clément DOUIN',
			'email'    => 'soywod@mail.com',
			'password' => bcrypt('soywod'),
		]);
	}
}
