<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        News::factory(100)->create();
        Category::factory(40)->create();
        Tag::factory(30)->create();

        $news = News::all();
        $categories = Category::all();
        $tags = Tag::all();
        foreach ($news as $new) {
            $new->categories()->attach($categories->random());
            $new->tags()->attach($tags->random());
        }
    }

}
