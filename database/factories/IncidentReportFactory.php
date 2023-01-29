<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Account;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IncidentReport>
 */
class IncidentReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => fake()->word(),
            'summary' => fake()->words(5, true),
            'body' => fake()->paragraph(),
            'updated_at' => fake()->dateTime(),
            
            //FK's
            'agent_id' => Agent::factory(),
            'organization_id' => Organization::factory(),
            'account_id' => Account::factory(),
            
            'status_updated_at' => fake()->dateTime(),
            'sent_at' => fake()->dateTime(),
            'subject' => fake()->words(5, true),
            'created_by_id' => fake()->uuid(),
            'remediation_instructions' => fake()->paragraph(),
            'footholds' => fake()->paragraph(),
            'severity' => fake()->word,
            'assigned_to_id' => fake()->randomDigitNotNull(),
            'closed_at' => fake()->dateTime(),
            'indicator_types' => collect(
                [
                    fake()->word, 
                    fake()->word
                ]
            ),
            'indicator_counts' => collect(
                [
                    'footholds' => fake()->word, 
                    'monitored_files' => fake()->word, 
                    'process_detections' => fake()->word, 
                    'ransomware_canaries' => fake()->word, 
                    'antivirus_detections' => fake()->word, 
                ]
            ),
            'details' => collect([]),
        ];
    }
}
