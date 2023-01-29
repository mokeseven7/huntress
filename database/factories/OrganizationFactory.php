<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'key' => fake()->word(),
            'notify_emails' => collect([fake()->email(), fake()->email()]), 
            'incident_reports_count' => fake()->randomDigitNotNull(),
            'account_id' => Account::factory(),
        ];
    }
}
