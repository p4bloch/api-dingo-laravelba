<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_AR');
        $posts = Post::lists('id');

		foreach(range(1, 60) as $index)
		{
			Comment::create([
                'post_id' => $faker->randomElement($posts),
                'username' => $faker->userName,
                'body' => join("\n", $faker->paragraphs(4))
			]);
		}
	}

}