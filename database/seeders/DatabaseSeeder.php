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


        $categories = [
            "Business" => [
                "Amazon",
                "Apple",
                "Facebook",
                "Google",
                "Microsoft",
                "Samsung",
                "Mobile"
            ],
            "Technology" => [
                "Deals",
                "Gift Guide",
                "Laptops",
                "Phones",
                "Headphones",
                "Tablets",
                "Smart Home",
                "SmartWatches",
                "Speakers",
                "Drones"
            ],
            "Entertainment" => ["Games", "Tv Shows", "Movies"],
            "Ai" => [],
            "Cars" => ["Electric Cars", "Autonomous Cars"]
        ];
        foreach ($categories as $parent => $subCategories) {
            $parent = Category::create([
                "title" => [
                    "ka" => $parent,
                    "en" => $parent
                ],
                "slug" => str()->slug($parent),
                "description" => [
                    "ka" => $parent." category description",
                    "en" => $parent." category description"
                ],
                "status" => true
            ]);

            if (!empty($subCategories)) {
                foreach ($subCategories as $category) {
                    $parent->children()->create([
                        "title" => [
                            "ka" => $category,
                            "en" => $category
                        ],
                        "slug" => str()->slug($category),
                        "description" => [
                            "ka" => $category." category description",
                            "en" => $category." category description"
                        ],
                        "status" => true,
                    ]);
                }
            }
        }


//        $categories = [
//            'Business' => [
//                'Amazon', 'Apple', 'Facebook', 'Google', 'Microsoft', 'Samsung', 'Mobile'
//            ],
//            'Technology' => [
//                'Deals', 'Gift Guide', 'Laptops', 'Phones', 'Headphones', 'Tablets', 'Smart Home', 'SmartWatches',
//                'Speakers', 'Drones'
//            ],
//            'Entertainment' => [
//                'Games', 'Tv Shows', 'Movies'
//            ],
//            'Ai',
//            'Cars' => [
//                'Electric Cars', 'Autonomous Cars'
//            ]
//        ];
//
//
//        Category::factory(10)
//            ->has(
//                Category::factory()
//                    ->has(
//                        Category::factory()->count(4), 'children'
//                    )
//                    ->count(3)
//                , 'children')
//            ->create();
        Tag::factory(30)->create();

        $news = News::all();
        $categories = Category::query()
            ->whereNull('parent_id')
            ->get();
        $tags = Tag::all();
        foreach ($news as $new) {
            $new->categories()->attach($categories->random());
            $new->tags()->attach($tags->random());
        }
    }

}
