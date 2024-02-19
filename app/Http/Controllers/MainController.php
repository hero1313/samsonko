<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Specie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing()
    {
        $products = Product::orderBy('created_at', 'desc')->take(10)->get();
        $brands = Brand::with('specie')->get();
       
        return view('website.components.landing', compact('products',  'brands'));
    }

    public function about()
    {
        return view('website.components.about');
    }

    public function shop(Request $request)
    {
        $brands = Brand::all();
        $maxPrice = Product::max('price');
        $products = Product::query();
        $categories = Category::all();
        if ($request->search) { // Corrected 'search' spelling
            $products = $products->where('name_ge', 'LIKE', "%{$request->search}%")
                ->orWhere('name_en', 'LIKE', "%{$request->search}%")
                ->orWhere('code', 'LIKE', "%{$request->search}%"); // Corrected 'search' spelling
        }
        if($request->category_id){
            $products = $products->where('category_id', $request->category_id);
        }
        if($request->brand_id){
            $products = $products->where('brand_id', $request->brand_id);
        }
        if($request->specie_id){
            $products = $products->where('specie_id', $request->specie_id);
        }
        $products = $products->orderBy('created_at', 'desc')->get();
        return view('website.components.shop', compact('products','maxPrice' , 'categories', 'brands'));
    }

    public function contact()
    {
        return view('website.components.contact');
    }


    public function product($id)
    {
        $product = Product::findOrFail($id);
        return view('website.components.product', compact('product'));
    }
}
