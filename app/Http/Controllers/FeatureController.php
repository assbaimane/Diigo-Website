<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
        $features = Feature::all();
        return view("back.pages.features", compact("features"));
    }

    public function destroy($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $feature = Feature::find($id);
        return view("back/pages/featureedit", compact("feature"));
    }

    public function update($id, Request $request)
    {
        $feature = Feature::find($id);
        $feature->img = $request->img ?? " ";
        $feature->paragraph = $request->paragraph ?? " ";
        $feature->button = $request->button ?? " ";
        $feature->updated_at = now();

        $feature->save();
        return redirect()->route("features.index");
    }
}
