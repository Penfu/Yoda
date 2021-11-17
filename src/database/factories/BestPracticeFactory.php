<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BestPracticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ucfirst($this->faker->domainWord()),
            'description' => $this->faker->realText(1000),
        ];
    }
}
