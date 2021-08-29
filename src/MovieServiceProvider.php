<?php

namespace Azeroglu\Movie;

use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Movie', function ($app) {
            return new Movie();
        });
    }

    public function provides()
    {
        return ['movie' => Movie::class];
    }
}
