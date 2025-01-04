<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\News;
use Livewire\Component;

class HomeComponent extends Component
{
    public $latestNews;
    public $restLatestNews;
    public $slideNews;
    public $bussinessNews;
    public $technologyNews;
    public $entertainmentNews;

    public function mount()
    {
        $called_ids = [];
        $news = News::has('media')
            ->with(['media', 'author', 'categories'])
            ->latest()
            ->whereStatus('Active')
            ->take(15)
            ->get();

        $called_ids = $news->pluck('id');

        $this->latestNews = $news->take(7);
        $this->slideNews = $news->skip(7)->take(7);

        $categoryNews = Category::query()
            ->whereIn('parent_id', [1, 9, 20])
            ->with([
                'news' => function ($news) {
                    $news->with(['media'])
                        ->has('media')
                        ->where('status', 'Active')
                        ->latest()
                        ->take(4);
                }
            ])
            ->get();

        $transformedNews = $categoryNews
            ->groupBy('parent_id')
            ->map(function ($categories) use (&$called_ids) {
                $allNews = $categories->pluck('news')->flatten(1);
                $allNews = $allNews->take(4);
                $called_ids = $called_ids->merge($allNews->pluck('id'));
                return $allNews;
            });
        $this->bussinessNews = $transformedNews[1]; //bussness
        $this->technologyNews = $transformedNews[9]; // technology
        $this->entertainmentNews = $transformedNews[20]; // entarnainent


        $this->restLatestNews = News::query()
            ->has('media')
            ->whereNotIn('id', $called_ids->unique())
            ->with(['media', 'author', 'categories'])
            ->latest()
            ->whereStatus('Active')
            ->take(15)
            ->get();
    }

    public function render()
    {
        return view('livewire.home-component');
    }
}
