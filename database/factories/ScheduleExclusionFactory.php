<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduleExclusion>
 */
class ScheduleExclusionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => fake()->randomNumber(1, 10),
            'starts_at' => '09:00:00',
            'ends_at' => '17:00:00',
        ];
    }
}
