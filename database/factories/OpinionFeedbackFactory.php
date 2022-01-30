<?php

namespace Database\Factories;

use App\Models\Opinion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpinionFeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'    => User::all()->random()->id,
            'opinion_id' => Opinion::all()->random()->id,
            'points'     => $this->faker->randomElement([-1, 1]),
            'created_at' => Carbon::now()->subMinutes(rand(1 * 24 * 60, 5 * 24 * 60)),
            'updated_at' => Carbon::now()->subMinutes(rand(0, 24 * 60))
        ];
    }
}
