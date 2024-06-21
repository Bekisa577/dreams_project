<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear the table
        DB::table('events')->truncate();

        // Seed data
        $events = [
            [
                'event_type' => 'Health Workshop',
                'learning_outcomes' => 'Understanding HIV prevention',
                'start_date' => '2024-07-01',
                'end_date' => '2024-07-03',
            ],
            [
                'event_type' => 'Skill Training',
                'learning_outcomes' => 'Basic sewing skills',
                'start_date' => '2024-08-05',
                'end_date' => '2024-08-10',
            ],
            // Add more events as needed
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
