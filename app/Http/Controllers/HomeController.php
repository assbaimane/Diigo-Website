<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        return view("back.pages.home", compact("homes"));
    }

    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $home = Home::find($id);
        return view("back/pages/homeedit", compact("home"));
    }

    public function update($id, Request $request)
    {
        $home = Home::find($id);
        $home->img = $request->img ?? " ";
        $home->paragraph = $request->paragraph ?? " ";
        $home->button = $request->button ?? " ";
        $home->updated_at = now();

        $home->save();
        return redirect()->route("homes.index");
    }
}
