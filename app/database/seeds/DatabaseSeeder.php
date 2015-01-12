<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Post::truncate();
		Author::truncate();
		Comment::truncate();

		$this->call('AuthorsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('CommentsTableSeeder');
	}

}
