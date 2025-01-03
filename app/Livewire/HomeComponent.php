<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeComponent extends Component
{
    public $latestNews;
    public $slideNews;
    public $bussinessNews;
    public $technologyNews;
    public $entertainmentNews;

    public function mount()
    {
        $this->latestNews = News::has('media')
            ->latest()
            ->whereStatus('Active')
            ->take(7)
            ->get();

        $this->slideNews = News::has('media')
            ->latest()
            ->with([
                'author' => function ($q) {
                    $q->select('id', 'name');
                }
            ])
            ->whereStatus('Active')
            ->take(4)
            ->get();

        $this->bussinessNews = News::has('media')
//            ->with(['categories'])
            ->whereStatus('Active')
            ->whereHas('categories', function ($q) {
                $q->where('parent_id', 1);
            })
            ->take(4)
            ->get();
        $this->technologyNews = News::has('media')
//            ->with(['categories'])
            ->whereStatus('Active')
            ->whereHas('categories', function ($q) {
                $q->where('parent_id', 9);
            })
            ->take(4)
            ->get();
        $this->entertainmentNews = News::has('media')
//            ->with(['categories'])
            ->whereStatus('Active')
            ->whereHas('categories', function ($q) {
                $q->where('parent_id', 20);
            })
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.home-component');
    }
}
