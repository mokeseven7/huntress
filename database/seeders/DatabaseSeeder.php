<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agent;
use App\Models\Account;
use App\Models\IncidentReport;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $account = \App\Models\Account::factory()
            ->has(
                Organization::factory()->count(3)
            )->has(
                Agent::factory()->count(3)
            )->create();


        $incident_report = IncidentReport::factory()->create();
    }
}
