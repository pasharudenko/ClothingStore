<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class shirtsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(4)->get();
        return view('index', compact('products'));
    }
    public function shirts()
    {
        $products = Product::all();
        return view('shirts', compact('products'));
    }
}
