<?php

namespace Modules\Stock\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class StockServiceProvider extends ServiceProvider
{
    protected $namespace = 'Modules\Stocks';
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
            __DIR__ . '/../config/stock.php', 'stock'
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'stock');
    }
    public function register()
    {


    }
    public function registerTranslation()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'stock');
    }
}
