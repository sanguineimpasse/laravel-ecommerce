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
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'desc' => 'nullable|max:255'
        ]);

        $newProduct = Product::create($data);

        return redirect()->route('dashboard');
    }

    public function edit(Product $product){
        //dd($product);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'desc' => 'nullable|max:255'
        ]);

        $product->update($data);

        return redirect()->route('dashboard');
    }

    public function delete(Product $product){
        //dd($product);

        $product->delete();
        return redirect()->route('dashboard');
    }

}
