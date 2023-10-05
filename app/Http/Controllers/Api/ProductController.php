<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        $response = response()->json($products,200);
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Products();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->status = $request->status;

        $product->save();

        $response = response()->json(["message" => "Successfully created product", "created_product" => $product],201);
        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Products::find($id);

        $response = response()->json($product,200);
        return $response;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->status = $request->status;
        $product->save();

        $response = response()->json(["message" => "Successfully deleted product", "updated_product" => $product],201);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Products::destroy($id);

        $response = response()->json(["message" => "Successfully deleted product"],201);

        return $response;
    }
}
