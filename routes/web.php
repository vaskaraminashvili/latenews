<?php


use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HomeComponent::class);

Route::get('/news/{category}', function ($category) {
    return 'category';
})->name('news.category');


