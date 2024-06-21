<?php

use Illuminate\Database\Seeder;
use App\Models\Material;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear the table
        DB::table('materials')->truncate();

        // Seed data
        $materials = [
            [
                'material_name' => 'HIV Prevention Guide',
                'target_audience' => '15-19',
            ],
            [
                'material_name' => 'Basic Sewing Techniques',
                'target_audience' => '10-14',
            ],
            // Add more materials as needed
        ];

        foreach ($materials as $material) {
            Material::create($material);
        }
    }
}
