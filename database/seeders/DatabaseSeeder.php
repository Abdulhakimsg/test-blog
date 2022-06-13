<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=> $personal->id,
            'title' => 'mock title',
            'slug' => 'mock slug',
            'excerpt' => 'mock excerpt',
            'body' => 'mock body'
        ]);
    }
}
