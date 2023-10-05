<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $productController = new ProductsController();
        $products = $productController->getProducts();

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $productController = new ProductsController();
        $addproduct = $productController->addProduct($request);

        return $addproduct;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $productController = new ProductsController();
        $product = $productController->getProduct($id);

        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $productController = new ProductsController();
        $updateproduct = $productController->updateProduct($request,$id);

        return $updateproduct;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Products::destroy($id);

        $response = response()->json(["message" => "Successfully deleted product"], 201);

        return $response;
    }
}
