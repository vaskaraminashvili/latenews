<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->generateTranslatableField(['ka', 'en']),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
        ];
    }

    protected function generateTranslatableField(
        array $locales,
        $number = 4
    ): array {
        $field = [];
        foreach ($locales as $locale) {
            $field[$locale]
                = $this->faker->sentence($number); // Generate fake data for each locale
        }
        return $field;
    }
}
