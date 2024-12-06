<?php

namespace App\Spiders\ItemProcessor;


use App\Models\Category;
use App\Models\News;
use App\Services\GoogleTranslateClientService;
use App\Services\ParaphraseService;
use RoachPHP\ItemPipeline\ItemInterface;
use RoachPHP\ItemPipeline\Processors\ItemProcessorInterface;

class LaraNewsProcessor implements ItemProcessorInterface
{
    public function processItem(ItemInterface $item): ItemInterface
    {
        // Convert the item to an array for saving
        $data = $item->all();
        $translator = resolve(GoogleTranslateClientService::class);
        $paraphrase = resolve(ParaphraseService::class);

        $title_ka = $translator->translate($data['title']);
        $title_en = $data['title'];

        $new_description = $paraphrase->paraphrase($data['description']);

        $description_ka = $translator->translate($new_description);
        $description_en = $new_description;

        $news = News::create([
            'title' => [
                'en' => $title_en,
                'ka' => $title_ka
            ],
            'description' => [
                'en' => $description_en,
                'ka' => $description_ka
            ],
            'short_desc' => [
                'en' => $data['description'],
                'ka' => $data['description']
            ],
            'author_id' => 2, // Or find/create author
            'status' => 'Not Active', // Default status
            'publish_date' => $data['date']
        ]);
        if (!empty($data['img'])) {
            $news->addMediaFromUrl($data['img'])->toMediaCollection('news');
        }
        $news->getSlugOptions();
        $amazon_category = Category::query()
            ->where('slug', $data['category_slug'])
            ->first();
        $news->categories()->attach($amazon_category);
        return $item; // Pass the item to the next pipeline stage
    }

    public function configure(array $options): void
    {
        // TODO: Implement configure() method.
    }
}