<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'qty' => 'required|integer|min:0',
            'imageUrl' => 'nullable|url|max:500',
        ];
    }

    public function lists()
    {
        return response()->json(Product::all());
    }

    public function listById(Request $request)
    {
        $id = intval($request->id);
        $product = Product::find($id);
        if (!$product) return response()->json(['message' => 'Not found'], 404);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());
        $product = Product::create($validated);
        return response()->json($product, 201);
    }


    public function update(Request $request)
    {
        $id = intval($request->id);
        $product = Product::find($id);
        if (!$product) return response()->json(['message' => 'Not found'], 404);

        $validated = $request->validate($this->rules());
        $product->update($validated);
        return response()->json($product);
    }


    public function destroy(Request $request)
    {
        $id = intval($request->id);
        $product = Product::find($id);
        if (!$product) return response()->json(['message' => 'Not found'], 404);

        $product->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
