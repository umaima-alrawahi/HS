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
            //tell laravel how to create data
            'title'=> $this->faker->words(3,true),
            'location_name'=> $this->faker->city(), 
            'location_url'=> $this->faker->url(),
            'description'=> $this->faker->randomHtml(2,3),

        ];
    }
}
