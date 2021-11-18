<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BestPractice::factory()->count(15)->create();

        $this->call([
            PublicationStateSeeder::class,
            DomainSeeder::class,
            RoleSeeder::class,
            
            UserSeeder::class,
        ]);
    }
}
