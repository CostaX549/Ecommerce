<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function index() {
        $todayDate = Carbon::now()->startOfDay();
        $orders = Order::where('created_at', '>=', $todayDate)->paginate(8);
        return view('admin.orders.index', compact('orders')); 
    }

    public function show(int $orderId) {
        $todayDate = Carbon::now()->startOfDay();
        $order = Order::where('created_at', '>=', $todayDate)->where('id', $orderId)->first();
        if($order) {
            return view('admin.orders.view', compact('order'));
        } else {
                return redirect()->back()->with('message', 'Nenhuma compra encontrada.');
        }

    }
    
}
