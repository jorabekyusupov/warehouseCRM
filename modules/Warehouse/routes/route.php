<?php
Route::group(['middleware' => [], 'prefix' => 'warehouses', 'as' => 'warehouse.'], function () {
    Route::get('/', [\Modules\Warehouse\Http\Controllers\WarehouseController::class, 'index'])
        ->name('index');
});