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
        dd("Posted pastry");
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
