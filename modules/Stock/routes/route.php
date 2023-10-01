<?php
Route::group(['middleware' => [], 'prefix' => 'stocks', 'as' => 'stock.'], function () {
        Route::get('/arrival', [\Modules\Stock\Http\Controllers\StockController::class, 'arrival'])
            ->name('arrival');
        Route::post('/arrival', [\Modules\Stock\Http\Controllers\StockController::class, 'postArrival'])
            ->name('arrival.store');
});