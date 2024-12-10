<?php

use App\Spiders\LaraNewsSpider;
use Illuminate\Support\Facades\Route;
use RoachPHP\Roach;

Route::get('/', function () {
//    $categories = Category::get()->toTree();
//    return view('welcome', compact('categories'));
    ini_set('memory_limit', '2048M');
    set_time_limit(3000);
    ini_set('max_execution_time', 3000);
    $items = Roach::collectSpider(LaraNewsSpider::class);
});
