<?php

namespace Database\Factories;

use App\Enums\NewsStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
    protected $model = News::class;
     */

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'short_desc' => $this->faker->text(),
            'video_link' => $this->faker->word(),
            'author_id' => User::factory(),
            'status' => $this->faker->randomElement(NewsStatus::class),
            'publish_date' => $this->faker->dateTime(),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
