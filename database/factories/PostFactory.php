<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Group;

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
            'description'=> $this->faker->randomHtml(2,3),
            'user_id' => $this->faker->randomElement(User::all())->id,
            'group_name' => $this->faker->randomElement(Group::all())->name,

        ];
    }
}
