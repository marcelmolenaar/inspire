<?php

namespace Fhsinchy\Inspire\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }

    public function register() {
        App::bind('test',function() {
           return new \Fhsinchy\Inspire\Inspire;
        });
     }
}
