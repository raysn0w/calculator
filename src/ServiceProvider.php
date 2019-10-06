<?php

namespace PhpPost\Calculator;

use PhpPost\Calculator\PostCalculator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        //$this->app->make(PostCalculator::class);
    }
}
