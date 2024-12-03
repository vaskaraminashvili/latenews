<?php

namespace App\Spiders\ItemProcessor;


use App\Models\Category;
use App\Models\News;
use RoachPHP\ItemPipeline\ItemInterface;
use RoachPHP\ItemPipeline\Processors\ItemProcessorInterface;

class LaraNewsProcessor implements ItemProcessorInterface
{
    public function processItem(ItemInterface $item): ItemInterface
    {
        // Convert the item to an array for saving
        $data = $item->all();
        $news = News::create([
            'title' => [
                'en' => $data['title'],
                'ka' => $data['title'] // You might want to provide a separate Georgian translation
            ],
            'description' => [
                'en' => $data['description'],
                'ka' => $data['description']
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