<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        Post::truncate();

        factory('App\Post',15)->create();
    }
}
