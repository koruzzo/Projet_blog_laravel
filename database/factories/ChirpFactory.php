<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;


class UserFactory extends Factory
{



    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(rand(5, 10), true),
            'content' => $this->faker->sentence(5, true),
            'image' => 'http://via.placeholder.com/1000'
        ];
    }


    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
