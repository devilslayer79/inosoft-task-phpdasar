<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
    $productModel = new Product();
    $product = $productModel->all()->toArray();

    print_r($product);
    }
}
