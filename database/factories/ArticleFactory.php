<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'contenu' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at'=> now(),
        ];
    }
}