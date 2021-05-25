<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store() {
        dd(request()->pastries);
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
        ]);

        return redirect()->route('home');
    }
}
