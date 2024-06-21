<?php

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
        $this->call([
            GirlsTableSeeder::class,
            EventsTableSeeder::class,
            ProgressTableSeeder::class,
            MaterialsTableSeeder::class,
        ]);
    }
}

 