<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
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
            'user_id' => 1,
            'title' => $this->faker->sentence(),
            'slug' => str_replace(" ","-",$this->faker->sentence()),
            'content' => $this->faker->paragraph(),
        ];
    }
}
