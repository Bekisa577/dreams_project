<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    protected $model = Material::class;

    public function definition()
    {
        return [
            'material_name' => $this->faker->word,
            'target_audience' => $this->faker->randomElement(['10-14', '15-19']),
        ];
    }
}
