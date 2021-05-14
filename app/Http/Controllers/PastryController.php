<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastry;

class PastryController extends Controller
{
    public function index() {
        $pastries = Pastry::all();

        return view('home', [
            'pastries' => $pastries
        ]);
    }

    public function show() {

    }

    public function create() {
        return view('pastry.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['string', 'required', 'min:3', 'max:64'],
            'image' => ['file'],
            'price' => ['string', 'required'],
            'summary' => ['string', 'required'],
            'description' => ['string', 'required', 'min:16', 'max:512']
        ]);

        $attributes['image'] = request('image')->store('images');

        Pastry::create([
            'pastry_name' => $attributes['name'],
            'img_path' => $attributes['image'],
            'price' => $attributes['price'],
            'summary' => $attributes['summary'],
            'description' => $attributes['description']
        ]);

        return redirect()->route('home');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
