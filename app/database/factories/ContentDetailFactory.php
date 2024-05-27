<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentDetail>
 */
class ContentDetailFactory extends Factory
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
            'body_title' => fake()->realText(10),         
            'body_text' => fake()->realText(40),         
        ];
    }
}
