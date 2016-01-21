<?php

class PostTableSeeder extends Seeder {
	
	public function run()
	{
		$user = User::firstOrFail();

		$post1 = new Post;
		$post1->title = "My favorite drink is...";
		$post1->body = "Of all the drinks in the world, my favorite is the Moscow Mule.  I no longer remember the days before I knew of it's existence.";
		$post1->user_id = $user->id;
		$post1->save();

		$post2 = new Post;
		$post2->title = "My favorite bar tool is...";
		$post2->body = "I used to love the muddler since it introduced me to basic mixology.  But it's no longer my favorite.  My favorite is hands down the boston shaker.  It's has so much versatility and power.";
		$post2->user_id = $user->id;
		$post2->save();

		$post3 = new Post;
		$post3->title = "My favorite movie is...";
		$post3->body = "I love dozens and dozens of movies.  But if I had to choose just one, it would be The Prestige!  Best movie ever.";
		$post3->user_id = $user->id;
		$post3->save();
	}
}