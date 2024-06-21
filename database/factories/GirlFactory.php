<?php

namespace Database\Factories;

use App\Models\Girl;
use Illuminate\Database\Eloquent\Factories\Factory;

class GirlFactory extends Factory
{
    protected $model = Girl::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'age_group' => $this->faker->randomElement(['10-14', '15-19']),
            'hiv_status' => $this->faker->randomElement(['negative', 'positive']),
            'dob' => $this->faker->date(),
            'village' => $this->faker->city,
            'schooling_status' => $this->faker->randomElement(['enrolled', 'not enrolled']),
        ];
    }
}
