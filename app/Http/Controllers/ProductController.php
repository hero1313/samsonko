<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Specie;
use Illuminate\Http\Request;
use File;


class ProductController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->with('specie')->with('brand')->orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        $species = Specie::orderBy('name')->get();


        return view('admin.components.products', compact(['products','categories','brands','species']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name_ge = $request->name_ge;
        $product->name_en = $request->name_en;
        $product->description_ge = $request->description_ge;
        $product->description_en = $request->description_en;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->specie_id = $request->specie_id;
        $product->price = $request->price;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $product->image = '/assets/admin/image/'.$filename;
        }
        $product->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name_ge = $request->name_ge;
        $product->name_en = $request->name_en;
        $product->description_ge = $request->description_ge;
        $product->description_en = $request->description_en;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->specie_id = $request->specie_id;
        $product->price = $request->price;        if ($request->hasfile('image')) {
            $destination = $product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $product->image = '/assets/admin/image/'.$filename;
        }
        $product->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $destination = $product->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $product->delete();
        return back();
    }
}
