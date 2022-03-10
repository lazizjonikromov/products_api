<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => 200,
            'products' => $products,
        ]);
    }


}
