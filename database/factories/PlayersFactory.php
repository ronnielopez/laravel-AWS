<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Players;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Players::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->position,
            'age' => $this->faker->numberBetween(18, 40),
        ];
    }
}
