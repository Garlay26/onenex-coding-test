<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'summary' => $this->faker->sentence(45),
            'imdb' => $this->faker->randomNumber(1),
            'cover_image' => "https://scribe.knuckles.wtf/img/logo.png",
            'genres' => $this->faker->words(5, true),
            'author' => $this->faker->words(5, true),
            'tags' => 'love,commedy,horror',
        ];
    }
}
