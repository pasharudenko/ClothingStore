<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shippingInfoController extends Controller
{
    public function index()
    {
        return view('cart.shippingInfo');
    }
}
