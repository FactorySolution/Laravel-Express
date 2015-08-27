<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{


    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 10)->create();
    }
}
