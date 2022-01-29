<?php

namespace Database\Factories;

use App\Models\Practice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(1000),
            'practice_id' => Practice::published()->get()->random()->id,
            'user_id'     => User::all()->random()->id
        ];
    }
}
