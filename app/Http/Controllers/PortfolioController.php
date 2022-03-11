<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view("back.pages.portfolios", compact("portfolios"));
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view("back/pages/portfolioedit", compact("portfolio"));
    }

    public function update($id, Request $request)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->img = $request->img ?? " ";
        $portfolio->paragraph = $request->paragraph ?? " ";
        $portfolio->button = $request->button ?? " ";
        $portfolio->updated_at = now();

        $portfolio->save();
        return redirect()->route("portfolios.index");
    }
}
