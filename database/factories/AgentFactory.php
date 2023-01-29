<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'version' => fake()->randomDigitNotNull(),
            'arch' => fake()->windowsPlatformToken(),
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTimeThisCentury(),
            'hostname' => fake()->domainName(),
            'win_build_number' => fake()->randomDigitNotNull(),
            'ipv4_address' => fake()->ipv4(),
            'mac_addresses' => fake()->macAddress(),
            'updated_at' => fake()->dateTimeThisYear(),
            'last_survey_at' => fake()->dateTimeThisDecade,
            'last_callback_at' => fake()->dateTimeThisYear(),
            'account_id' => Account::factory(),
            'organization_id' => Organization::factory(),
            'platform' => fake()->randomDigitNotNull(),
            'os' => fake()->randomDigitNotNull(),
            'service_pack_major' => fake()->randomDigitNotNull(),
            'service_pack_minor' => fake()->randomDigitNotNull(),
            'tags' => fake()->randomAscii(),
            'os_major' => fake()->randomDigitNotNull,
            'os_minor' => fake()->randomDigitNotNull,
            'os_patch' => fake()->randomDigitNotNull,
            'version_number' => fake()->randomDigitNotNull,
            'edr_version' => fake()->randomDigitNotNull,
            'os_build_version' => fake()->randomDigitNotNull,
            'serial_number' => fake()->uuid(),
            'domain_name' => fake()->domainName(),
            'external_ip' => fake()->ipv4(),
        ];
    }
}
