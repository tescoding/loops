<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [   'post_id' => 1,
                'name' => "User 1",
                'email' => "user1@mail.com",
                'website' => "https://google.com",
                'comment' => "Nice Works",
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            

        ];

        \DB::table('comments')->insert($comments);
    }
}
