<?php

namespace PhpPost\Calculator;

use PhpPost\Calculator\Middleware\ValidatePutSize;
use PhpPost\Calculator\PostCalculator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', ValidatePutSize::class);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
        //$this->app->make(PostCalculator::class);
    }
}
