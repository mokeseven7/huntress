<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillingReport>
 */
class BillingReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plan' => fake()->words(3),
            'quantity' => fake()->randomDigitNotNull(),
            'amount' => fake()->numberBetween(0, 1000),
            'currency_type' => fake()->currencyCode(),
            'receipt' => fake()->url(),
            'status' => fake()->boolean(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
