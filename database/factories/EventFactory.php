<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'event_type' => $this->faker->sentence,
            'learning_outcomes' => $this->faker->paragraph,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
