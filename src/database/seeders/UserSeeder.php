<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'role_id' => Role::where('slug', 'admin')->first()->id,
            'name' => 'Penfu',
            'fullname' => 'Armand Marechal',
            'email' => 'armand.marechal@cpnv.ch',
            'email_verified_at' => now(),
            'password' => Hash::make('root'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(50)->create();
    }
}
