<?php

namespace Database\Seeders;

use App\Models\OpinionComment;
use Illuminate\Database\Seeder;

class OpinionCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpinionComment::factory(250)->create();
    }
}
