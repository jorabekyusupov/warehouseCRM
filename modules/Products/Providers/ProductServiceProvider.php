<?php

namespace Modules\Products\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ProductServiceProvider extends ServiceProvider
{
    protected $namespace = 'Modules\Products';
    protected $apiPrefix = 'admin';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */


    public function boot()
    {
        $this->routes();
        $this->registerView();
        $this->registerTranslation();
        $this->mergeConfigFrom(
            __DIR__ . '/../config/products.php', 'product'
        );

    }


    public function routes()
    {
        Route::
        middleware([])->
        prefix($this->apiPrefix)
            ->namespace($this->namespace . '\Http\Controllers')
            ->group(__DIR__ . '/../routes/route.php');
    }

    public function registerView()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'product');
    }
    public function register()
    {


    }
    public function registerTranslation()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'product');
    }
}
