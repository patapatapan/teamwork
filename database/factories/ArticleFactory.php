<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cgy_id' => rand(1, 6),
            'title' => $this->faker->realText(20),
            'pic' =>
            'images/blog_' . rand(1, 4) . '.png',
            'content_small' => $this->faker->realText(50),
            'content' => $this->faker->realText(500),
            'author_id' => rand(1, 3),
            'sort' => rand(0, 10),
            'status' => $this->faker->randomElement(array('published', 'draft', 'pending')),
            'featured' => rand(0, 1),
            'slug' => 'articles-' . $this->faker->unique()->randomNumber,
        ];
    }
}
