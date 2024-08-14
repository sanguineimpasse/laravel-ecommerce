<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view('products.create');
    }

    public function store(Request $request){
        Product::create([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'desc' => $request->get('desc')
        ]);

        return redirect()->route('dashboard');
    }

}
