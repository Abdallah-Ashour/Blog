<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = 'post_image_' . rand(1, 5) . '.jpg';
        // $date = date('y-m-d H:i:s');
        return [
            'title' => $title = $this->faker->title(),
            // 'slug' => Str::slug($title),
            'slug' => $this->faker->slug(),
            //  'image' => $this->faker->imageUrl(700, 400),
            'image' => rand(0, 1) == 0 ? $image : null,

            'excerpt' => $this->faker->text(rand(250, 300)),
            'body'  => $this->faker->paragraph(rand(10, 15), true),
            'user_id' => rand(1, 10), // auth()->user()->id,
            'category_id' =>  rand(1, 5)

        ];
    }
}
