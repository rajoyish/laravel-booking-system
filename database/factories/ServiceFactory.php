<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = fake()->randomElement(['Hair', 'Beard', 'Spa', 'Massage']),
            'slug' => str()->slug($title),
            'duration' => '30',
            'price' => 2000,
        ];
    }
}
