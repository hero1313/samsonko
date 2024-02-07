<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use App\Models\Brand;

use Illuminate\Http\Request;


class specieController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(specie $specie)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $species = Specie::with('brand')->where('brand_id', $id)->orderBy('created_at', 'desc')->get();
        $brand = Brand::find($id);
        $brands = Brand::orderBy('name')->get();

        return view('admin.components.species', compact(['species','id','brands']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $specie = new Specie;
        $specie->name_ge = $request->name_ge;
        $specie->name_en = $request->name_en;
        $specie->brand_id = $id;
        $specie->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $specie = Specie::find($id);
        $specie->name_ge = $request->name_ge;
        $specie->name_en = $request->name_en;
        $specie->brand_id = $request->brand_id;
        $specie->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specie = Specie::find($id);
        $specie->delete();
        return back();
    }
}
