<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id' => 1,
            'name' =>  $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'comment' => $this->faker->paragraph(),
        ];
    }
}
