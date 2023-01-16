<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cgy>
 */
class CgyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => null,
            'title' => $this->faker->word,
            'pic' => null,
            'desc' => $this->faker->paragraph,
            'enabled' => rand(0, 1),
            'sort' => rand(0, 20),
            'type' => null,
        ];
    }
}