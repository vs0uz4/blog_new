<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('posts')->truncate();

		Post::create([
			'user_id' => 1,
			'title'   => 'Post 1',
			'slug'    => 'post-1',
			'desc'    => 'post 1 description',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eum fuga nesciunt. Accusantium atque, consequuntur corporis cum deserunt eaque eligendi est excepturi fuga quis, reiciendis similique tempore temporibus totam ut voluptate voluptatem? Ad adipisci, alias aperiam, asperiores at atque culpa deleniti, eius est et expedita fugit inventore ipsum labore libero magnam natus non optio pariatur perspiciatis qui quia quod temporibus ut veniam voluptate voluptatum!',
		]);

		Post::create([
			'user_id' => 1,
			'title'   => 'Post 2',
			'slug'    => 'post-2',
			'desc'    => 'post 2 description',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eum fuga nesciunt. Accusantium atque, consequuntur corporis cum deserunt eaque eligendi est excepturi fuga quis, reiciendis similique tempore temporibus totam ut voluptate voluptatem? Ad adipisci, alias aperiam, asperiores at atque culpa deleniti, eius est et expedita fugit inventore ipsum labore libero magnam natus non optio pariatur perspiciatis qui quia quod temporibus ut veniam voluptate voluptatum!',
		]);

		Post::create([
			'user_id' => 1,
			'title'   => 'Post 3',
			'slug'    => 'post-3',
			'desc'    => 'post 3 description',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eum fuga nesciunt. Accusantium atque, consequuntur corporis cum deserunt eaque eligendi est excepturi fuga quis, reiciendis similique tempore temporibus totam ut voluptate voluptatem? Ad adipisci, alias aperiam, asperiores at atque culpa deleniti, eius est et expedita fugit inventore ipsum labore libero magnam natus non optio pariatur perspiciatis qui quia quod temporibus ut veniam voluptate voluptatum!',
		]);
	}
}
