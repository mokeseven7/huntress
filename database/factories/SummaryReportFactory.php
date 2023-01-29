<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SummaryReport>
 */
class SummaryReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => fake()->word(),
            'period' => fake()->word(),
            'organization_id' => fake()->word(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
            'url' => fake()->word(),
        ];
    }
}
