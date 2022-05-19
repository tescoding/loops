<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [   
                'name' => 'user1',
                'email' => 'user1@mail.com',
                'password' => bcrypt('12345678'), 
                'created_at' => new \DateTime,
                'updated_at' => null,
            ], 
            [   
                'name' => 'user2',
                'email' => 'user2@mail.com',
                'password' => bcrypt('12345678'), 
                'created_at' => new \DateTime,
                'updated_at' => null,
            ], 

        ];

        \DB::table('users')->insert($users); 
    }
}
