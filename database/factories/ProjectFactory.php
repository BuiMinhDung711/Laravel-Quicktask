<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'start_day' => fake()->dateTimeInInterval('-5 years', '+5 day'),
            'end_day' => fake()->dateTimeInInterval('+5 years', '+5 days'),
            'note' => fake()->paragraphs(),
            'result' => fake()->text(),
        ];
    }
}
