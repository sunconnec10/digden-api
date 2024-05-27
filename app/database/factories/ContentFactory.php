<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image_url' => fake()->url(),         
            'title' => fake()->realText(10),         
            'text' => fake()->realText(40),     
            'summary' => fake()->realText(30),     
        ];
    }
}
