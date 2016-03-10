<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('skills')->truncate();

		Skill::create([
			'user_id' => 1,
			'name'    => 'skill 1',
			'level'   => 5,
		]);

		Skill::create([
			'user_id' => 1,
			'name'    => 'skill 2',
			'level'   => 4,
		]);

		Skill::create([
			'user_id' => 1,
			'name'    => 'skill 3',
			'level'   => 3,
		]);

		Skill::create([
			'user_id' => 1,
			'name'    => 'skill 4',
			'level'   => 1,
		]);
	}
}
