<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories = Cache::remember('categories', 60 * 12, function () {
            return Category::query()
                ->get()->toTree();
        });
        View::composer('*', function ($view) use ($categories) {
            $view->with('categories', $categories);
        });
    }
}
