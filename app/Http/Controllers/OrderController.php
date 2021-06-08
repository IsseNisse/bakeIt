<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();

        return view('order.index', [
            'orders' => $orders
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required', 'string', 'min:3', 'max:64'],
            'phone_number' => ['required'],
            'info' => [],
            'pastries' => ['required', 'min:1']
        ]);

        Order::create([
            'name' => $attributes['name'],
            'phone_number' => $attributes['phone_number'],
            'info' => $attributes['info'],
        ])->pastries()->attach(request('pastries'));

        return redirect()->route('home');
    }
}
