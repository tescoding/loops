<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [   'user_id' => 1,
                'title' => "Lorem Ipsum",
                'slug' => "lorem-ipsum",
                'content' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing 
                           industries for previewing layouts and visual mockups.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'user_id' => 1,
                'title' => "What is Lorem Ipsum?",
                'slug' => "what-is-lorem-ipsum",
                'content' => 'From its medieval origins to the digital era, learn everything there is to know about 
                           the ubiquitous lorem ipsum passage.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ], 
            [
                'user_id' => 2,
                'title' => "Origins and Discovery",
                'slug' => "origins-and-discovery",
                'content' => 'Lorem ipsum began as scrambled, nonsensical Latin derived from Cicero"s
                           1st-century BC text De Finibus Bonorum et Malorum.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];

        \DB::table('posts')->insert($posts);
    }
}
