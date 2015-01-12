<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_AR');
		$authors = Author::lists('id');

		foreach(range(1, 15) as $index)
		{
			Post::create([
                'author_id' => $faker->randomElement($authors),
                'title' => $faker->sentence(4),
                'body' => join("\n", $faker->paragraphs(3))
			]);
		}
	}

}