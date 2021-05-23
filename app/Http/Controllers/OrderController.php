<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store() {
        $attributes = request()->validate([
            'name' => ['string', 'required', 'min:3', 'max:64'],
            'phone' => ['required'],
            'info' => ['string']
        ]);

        Order::create([
            'name' => $attributes['name'],
            'phone' => $attributes['phone'],
            'info' => $attributes['info'],
        ]);

        return redirect()->route('home');
    }
}
