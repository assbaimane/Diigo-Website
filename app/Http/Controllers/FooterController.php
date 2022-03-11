<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        $footers = Footer::all();
        return view("back.pages.footer", compact("footers"));
    }

    public function destroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $footer = Footer::find($id);
        return view("back/pages/footeredit", compact("footer"));
    }

    public function update($id, Request $request)
    {
        $footer = Footer::find($id);
        $footer->social1 = $request->social1 ?? " ";
        $footer->social2 = $request->social2 ?? " ";
        $footer->social3 = $request->social3 ?? " ";
        $footer->copyright = $request->copyright ?? " ";
        $footer->updated_at = now();

        $footer->save();
        return redirect()->route("footers.index");
    }
}