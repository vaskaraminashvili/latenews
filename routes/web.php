<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::get()->toTree();
    return view('welcome', compact('categories'));
});
