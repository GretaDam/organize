<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $this->faker->image('public/assets/img',640,480, null, false);
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->text(500),
            'reference' => Str::random(10),
            'checked_or_not' => $this->faker->boolean(),
            'priority' => $this->faker->numberBetween(1,3),
            'user_id' => $this->faker->numberBetween(1,5),
            'joined_file' => 'https://picsum.photos/seed/' . Str::random() . '/640/480',
            'start_date'=> $this->faker->dateTime('now', null),
            'end_date'=> $this->faker->dateTime('now', null), 
        ];
    }
}
