<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * I will add the products in product table
     */
    public function addProduct(Request $req)
    {
        $product = new Product();
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        $product->category = $req->input('category');
        $product->gallery = $req->file('gallery')->store('products');
        $product->save();

        return $product;
    }

    /**
     * I will show the products
     */

     public function list()
     {
        return Product::all();
     }

}
