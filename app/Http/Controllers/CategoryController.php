<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use File;
class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.components.categories', compact(['categories']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name_ge = $request->name_ge;
        $category->name_en = $request->name_en;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $category->image = '/assets/admin/image/'.$filename;
        }
        $category->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name_ge = $request->name_ge;
        $category->name_en = $request->name_en;
        if ($request->hasfile('image')) {
            $destination = $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/admin/image/', $filename);
            $category->image = '/assets/admin/image/'.$filename;
        }
        $category->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
