<?php

namespace Manishhiran\Helloworld;

use Illuminate\Support\ServiceProvider;

class HelloworldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'helloworld');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Manishhiran\Helloworld\HelloworldController');
    }
}
