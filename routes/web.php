<?php

use App\Spiders\LaraNewsSpider;
use Illuminate\Support\Facades\Route;
use RoachPHP\Roach;

Route::get('/', function () {
//    $categories = Category::get()->toTree();
//    return view('welcome', compact('categories'));

    $items = Roach::collectSpider(LaraNewsSpider::class);
});
