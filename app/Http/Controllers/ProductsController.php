<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function getProducts()
    {
        $products = Products::all();
        $response = response()->json($products, 200);
        return $response;
    }

    public function getProduct($id)
    {
        if (isset($id)) {
            if (is_numeric($id)) {
                $products = Products::find($id);
                $response = response()->json($products, 200);
                return $response;
            } else {
                $response = response()->json(["message" => "Data showing Failed!", "desc" => "ID must be Integer"], 400);
                return $response;
            }
        } else {
            $response = response()->json(["message" => "Data showing Failed!", "desc" => "Wrong values or Empty values"], 400);
            return $response;
        }
    }

    public function addProduct($req)
    {
        if (isset($req)) {
            $product = new Products();

            $product->name = $req->name;
            $product->description = $req->description;
            $product->image = $req->image;
            $product->price = $req->price;
            $product->stock = $req->stock;
            $product->status = $req->status;

            $product->save();

            $response = response()->json(["message" => "Successfully created product", "created_product" => $product], 201);
            return $response;
        } else {
            $response = response()->json(["message" => "Data insertion Failed!", "desc" => "Wrong values or Empty values"], 400);
            return $response;
        }
    }
    public function updateProduct($req, $id)
    {
        if (isset($req) && isset($id)) {
            if (is_numeric($id)) {


                $product = Products::findorFail($id);

                $product->name = $req->name;
                $product->description = $req->description;
                $product->image = $req->image;
                $product->price = $req->price;
                $product->stock = $req->stock;
                $product->status = $req->status;

                $product->save();

                $response = response()->json(["message" => "Successfully updated product", "updated_product" => $product], 201);
                return $response;
            } else {
                $response = response()->json(["message" => "Data updating Failed!", "desc" => "ID must be Integer"], 400);
                return $response;
            }
        } else {
            $response = response()->json(["message" => "Data updating Failed!", "desc" => "Wrong values or Empty values"], 400);
            return $response;
        }
    }

    public function deleteProduct($id)
    {
        if (isset($id)) {
            if (is_numeric($id)) {


                $product = Products::destroy($id);

                $response = response()->json(["message" => "Successfully deleted product"], 201);

                return $response;
            } else {
                $response = response()->json(["message" => "Data deleting Failed!", "desc" => "ID must be Integer"], 400);
                return $response;
            }
        } else {
            $response = response()->json(["message" => "Data deleting Failed!", "desc" => "Wrong values or Empty values"], 400);
            return $response;
        }
    }
}
