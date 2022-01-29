<?php

namespace Database\Seeders;

use App\Models\OpinionFeedback;
use Illuminate\Database\Seeder;

class OpinionFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpinionFeedback::factory(1000)->create();
    }
}
