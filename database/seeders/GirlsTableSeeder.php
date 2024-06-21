<?php

use Illuminate\Database\Seeder;
use App\Models\Girl;
use Illuminate\Support\Facades\DB;

class GirlsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear the table
        DB::table('girls')->truncate();

        // Seed data
        $girls = [
            [
                'name' => 'Jane Doe',
                'address' => '123 Main St',
                'age_group' => '15-19',
                'hiv_status' => 'negative',
                'dob' => '2005-06-15',
                'village' => 'Village A',
                'schooling_status' => 'enrolled',
            ],
            [
                'name' => 'Alice Smith',
                'address' => '456 Oak St',
                'age_group' => '10-14',
                'hiv_status' => 'positive',
                'dob' => '2010-03-22',
                'village' => 'Village B',
                'schooling_status' => 'not enrolled',
            ],
            // Add more girls as needed
        ];

        foreach ($girls as $girl) {
            Girl::create($girl);
        }
    }
}
