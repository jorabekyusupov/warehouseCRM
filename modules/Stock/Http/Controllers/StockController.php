<?php

namespace Modules\Stock\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Products\Models\Product;
use Modules\Stock\Models\Shipment;
use Modules\Stock\Models\ShipmentAttribute;
use Modules\Warehouse\Models\Warehouse;

class StockController extends Controller
{
    public function arrival()
    {
        $warehouses = Warehouse::query()
            ->get();
     $products = Product::query()
            ->get();

        return view('stock::arrival', compact('warehouses', 'products'));
    }

    public function postArrival(Request $request)
    {

        $data = $request->validate([

            'product_id' => 'required|integer',
            'warehouse_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'currency' => 'required|string',
        ]);

      $attribute =  ShipmentAttribute::query()
            ->create($data);

      $shipment =  Shipment::query()
            ->create([
                'warehouse_id' => $data['warehouse_id'],
                'attribute_id' => $attribute->id,
                'product_id' => $data['product_id'],
                'type' => 'in',
                'quantity' => $data['quantity'],
            ]);
        return redirect()->back()->with('success', 'Успешно добавлено');

    }
}
