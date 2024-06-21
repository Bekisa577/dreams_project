<?php

namespace Database\Factories;

use App\Models\Progress;
use App\Models\Girl;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressFactory extends Factory
{
    protected $model = Progress::class;

    public function definition()
    {
        return [
            'girl_id' => Girl::factory(),
            'event_id' => Event::factory(),
            'skills_attained' => $this->faker->sentence,
            'assessment_parameters' => $this->faker->paragraph,
        ];
    }
}
