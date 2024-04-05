<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        #\App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'develop@shorts.com',
             'password' => Hash::make('B4f$2a3'),
        ]);
    }
}
