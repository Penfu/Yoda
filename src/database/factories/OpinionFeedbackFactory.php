<?php

namespace Database\Factories;

use App\Models\Opinion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpOption\Option;

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
            'comment'    => rand(1, 3) == 1 ? $this->faker->text(1000) : '',
            'points'     => $this->faker->randomElement([-1, 0, 1]),
            'created_at' => Carbon::now()->subMinutes(rand(1*24*60, 5*24*60)),
            'updated_at' => Carbon::now()->subMinutes(rand(0, 24*60))
        ];
    }
}
