<?php
Route::group(['middleware' => [], 'prefix' => 'products', 'as' => 'product.'], function () {
    Route::get('/', [\Modules\Products\Http\Controllers\ProductController::class, 'index'])
        ->name('index');
});