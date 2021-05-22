<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['string', 'required', 'min:3', 'max:64'],
            'img_path' => ['file'],
            'price' => ['string', 'required'],
            'summary' => ['string', 'max:32', 'required'],
            'description' => ['string', 'required', 'min:16', 'max:512']
        ]);

        $attributes['img_path'] = request('img_path')->store('images');

        Pastry::create([
            'name' => $attributes['name'],
            'img_path' => $attributes['img_path'],
            'price' => $attributes['price'],
            'summary' => $attributes['summary'],
            'description' => $attributes['description']
        ]);

        return redirect()->route('home');
    }

    public function destroy() {
        
    }
}
