<?php

namespace Modules\Warehouse\Http\Controllers;

use App\Http\Controllers\Controller;
use Database\Factories\WarehouseFactory;
use Modules\Warehouse\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {

        $table = Warehouse::query()
            ->paginate(10);
        return view('warehouse::table', compact('table'));

    }
}
