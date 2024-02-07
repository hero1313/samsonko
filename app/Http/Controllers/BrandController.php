<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use File;


class BrandController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('created_at', 'desc')->get();

        return view('admin.components.brands', compact(['brands']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name_ge = $request->name_ge;
        $brand->name_en = $request->name_en;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $brand->image = '/assets/admin/image/'.$filename;
        }
        $brand->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name_ge = $request->name_ge;
        $brand->name_en = $request->name_en;
        if ($request->hasfile('image')) {
            $destination = $brand->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $brand->image = '/assets/admin/image/'.$filename;
        }
        $brand->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $destination = $brand->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $brand->delete();
        return back();
    }
}
