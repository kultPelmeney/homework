<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request) {
        $search = $request->search ?? '';

        $orders = Order::where('first_name','like','%' . $search . '%')->OrWhere('last_name','like','%' . $search . '%');
        $orders = $orders->paginate(5);

        return view('admin.order.index', compact('orders'));
    }

    public function show($id) {
        $order = Order::find($id);

        return view('admin.order.show', compact('order'));
    }
}
