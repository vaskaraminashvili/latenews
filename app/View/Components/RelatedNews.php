<?php

namespace App\View\Components;

use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedNews extends Component
{
    public $news;

    public function __construct($news)
    {
        $categories = $news->categories;
        $categories_ids = $categories->pluck('id')->toArray();
        $this->news = News::query()
            ->with(['categories', 'media', 'author'])
            ->where('id', '!=', $news->id)
            ->whereHas('categories', function ($query) use ($categories_ids) {
                $query->whereIn('categories.id', $categories_ids);
            })
            ->limit(4)
            ->get();
    }

    public function render(): View
    {
        return view('components.related-news');
    }
}
