<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Schedule;
use App\Models\ScheduleExclusion;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Employee::factory(10)->create();
        Schedule::factory(10)->create();
        // Service::factory(4)->create();
        ScheduleExclusion::factory(10)->create();

        // Service::factory(4)->create();
    }
}
