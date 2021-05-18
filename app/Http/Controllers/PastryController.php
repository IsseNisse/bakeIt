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

    public function show($pastryName) {
        $pastry = Pastry::where('name', $pastryName)->first();

        return view('pastry.show', ['pastry' => $pastry]);
    }

    public function create() {
        return view('pastry.create');
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

    public function edit($pastryName) {
        $pastry = Pastry::where('name', $pastryName)->first();

        return view('pastry.edit', ['pastry' => $pastry]);
    }

    public function update($pastryName) {
        $pastry = Pastry::where('name', $pastryName)->first();

        $attributes = request()->validate([
            'name' => ['string', 'required', 'min:3', 'max:64'],
            'img_path' => ['file'],
            'price' => ['string', 'required'],
            'summary' => ['string', 'max:32', 'required'],
            'description' => ['string', 'required', 'min:16', 'max:512']
        ]);

        if (request('img_path')) {
            $attributes['img_path'] = request('img_path')->store('images');
        }

        $pastry->update($attributes);

        return redirect('/' . $pastryName);
    }

    public function destroy($pastryName) {
        $pastry = Pastry::where('name', $pastryName);
        $pastry->delete();

        return redirect(route('home'));
    }
}
