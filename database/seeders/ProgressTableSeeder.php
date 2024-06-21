
<?php

use Illuminate\Database\Seeder;
use App\Models\Progress;
use Illuminate\Support\Facades\DB;

class ProgressTableSeeder extends Seeder
{
    public function run()
    {
        // Clear the table
        DB::table('progress')->truncate();

        // Seed data
        $progressRecords = [
            [
                'girl_id' => 1,
                'event_id' => 1,
                'skills_attained' => 'Health awareness',
                'assessment_parameters' => 'Improved knowledge on HIV prevention',
            ],
            [
                'girl_id' => 2,
                'event_id' => 2,
                'skills_attained' => 'Sewing skills',
                'assessment_parameters' => 'Able to sew basic garments',
            ],
            // Add more progress records as needed
        ];

        foreach ($progressRecords as $progress) {
            Progress::create($progress);
        }
    }
}
