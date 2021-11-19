<?php

namespace Database\Seeders;

use App\Models\Practice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Practice::factory(50)->create();
    }
}
