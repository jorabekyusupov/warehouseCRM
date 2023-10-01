<?php

namespace Modules\Warehouse\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class WarehouseServiceProvider extends ServiceProvider
{
    protected $namespace = 'Modules\Warehouse';
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
            __DIR__ . '/../config/warehouse.php', 'warehouse'
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'warehouse');
    }
    public function register()
    {


    }
    public function registerTranslation()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'warehouse');
    }

}
