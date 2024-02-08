<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing()
    {
        $products = Product::orderBy('created_at', 'desc')->take(10)->get();
        $brands = Brand::all();
        return view('website.components.landing', compact('products','brands'));
    }

    public function about()
    {
        return view('website.components.about');
    }

    public function shop()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('website.components.shop', compact('products'));
    }

    public function contact()
    {
        return view('website.components.contact');
    }

    public function wishlist()
    {
        return view('website.components.wishlist');
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);
        return view('website.components.product', compact('product'));
    }
}
