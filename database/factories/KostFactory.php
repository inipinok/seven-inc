<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug'  => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10,25)),
            'body' => '<p>' . implode('</p></p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'address' => $this->faker->address,
            'qty' => 2,
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3),
        ];
    }
}
