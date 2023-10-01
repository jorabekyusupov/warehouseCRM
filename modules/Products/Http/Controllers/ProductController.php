<?php

namespace Modules\Products\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Products\Models\Product;
use Modules\Warehouse\Models\Warehouse;

class ProductController extends Controller
{
    public function index()
    {
        $table = Product::query()
            ->paginate(10);
        return view('product::table', compact('table'));
    }
}
