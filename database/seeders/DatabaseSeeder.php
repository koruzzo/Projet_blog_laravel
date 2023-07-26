<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create()->each(function($user) {
            Post::factory(rand(1, 3))->create([
                'user_id' => $user->id
            ]);
        });
    }
}
