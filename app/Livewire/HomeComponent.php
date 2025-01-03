<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class HomeComponent extends Component
{
    public $latestNews;
    public $slideNews;

    public function mount()
    {
//        $item = News::find(117);
//        dd($item->getFirstMediaUrl('news'));
        $this->latestNews = News::has('media')->latest()->whereStatus('Active')->take(7)->get();

        $this->slideNews = News::has('media')
            ->latest()
            ->with([
                'author' => function ($q) {
                    $q->select('id', 'name');
                }
            ])
            ->whereStatus('Active')
            ->take(4)->get();
    }

    public function render()
    {
        return view('livewire.home-component');
    }
}
