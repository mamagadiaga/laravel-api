<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'user_id' => $request->user_id,
        ]);

        foreach ($request->products as $product) {
            $order->orderDetails()->create([
                'product_id' => $product['product_id'],
                'quantity' => $product['quantity'],
            ]);


            $product = Product::find($product['product_id']);
            $product->decrement('quantity', $product['quantity']);
        }

        return response()->json(['message' => 'La commande a été créée avec succès'], 201);
    }
}

