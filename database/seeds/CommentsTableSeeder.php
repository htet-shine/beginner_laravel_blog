<?php

use App\Comment;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i <= 20; $i++) { 
        	$comment = new Comment;
        	$comment->comment = $faker->sentence();
        	$comment->post_id = rand(1,20);
        	$comment->save();
        }
    }
}
