<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return 'news category page';
    }

    public function show(News $news)
    {
        $news->load('categories.ancestors');
//        dd($news->categories);
        return view('news.show', compact('news'));
    }
}
