<?php

namespace Database\Factories;

use App\Models\Practice;
use Illuminate\Database\Eloquent\Factories\Factory;

class PracticeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Practice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'style' => $this->faker->word,
            'times' => $this->faker->randomDigitNotNull,
            'strength' => $this->faker->word,
            'long' => $this->faker->year,
            'time' => $this->faker->randomDigitNotNull,
            'total' => $this->faker->year,
            'impression' => $this->faker->realText,
        ];
    }
}