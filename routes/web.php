<?php


use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HomeComponent::class)->name('home');


Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');


Route::get('/category/{category}', function ($category) {
    return 'category';
})->name('news.category');


