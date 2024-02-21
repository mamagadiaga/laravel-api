<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderViewController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderDetails')->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('orderDetails')->findOrFail($id);
        return view('orders.show', compact('order'));
    }
}
