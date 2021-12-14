<?php

namespace Database\Factories;

use App\Models\OpinionFeedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'opinion_feedbacks_id' => OpinionFeedback::all()->random()->id,
            'comment'              => $this->faker->text(500)
        ];
    }
}
