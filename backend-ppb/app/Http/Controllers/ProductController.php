<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $prods = Product::get();

        if (request()->segment(1) == 'api') {
            return response()->json([
                'error' => false,
                'list' => $prods
            ]);
        }

        return view('view_product', [
            'title' => 'Daftar Produk',
            'data' => $prods,
            'products' => $prods,
        ]);
    }

    public function create()
    {
        return view('form_product', [
            'title' => 'Tambah',
            'product' => new Product(),
            'route' => route('product.store'),
            'method' => 'POST',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000',
        ]);
        $prod = new Product;
        $prod->name = $request->name;
        $prod->price = $request->price;
        $prod->save();
        if (request()->segment(1) == 'api') return response()->json([
            'error' => false,
            'message' => 'Produk berhasil ditambah',
        ], 200);
        return redirect('/produk')->with('message', 'Produk berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
