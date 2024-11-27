<?php

namespace App\Providers;

use duncan3dc\Speaker\Providers\GoogleProvider;
use Illuminate\Support\ServiceProvider;

class TextToSpeechServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('text-to-speech', function () {
            return new GoogleProvider();
        });
    }

    public function boot(): void
    {
    }
}
