<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $category->name = $request->name;
        $category->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;

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
