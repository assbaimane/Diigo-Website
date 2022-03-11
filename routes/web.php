<?php

use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Nav;
use App\Models\Portfolio;
use App\Models\Titre;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FooterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $titres = Titre::all();
    $navs = Nav::all();
    $homes = Home::all();
    $features = Feature::all();
    $testimonials = Testimonial::all();
    $portfolios = Portfolio::all();
    $contacts = Contact::all();
    $footers = Footer::all();
    return view('welcome', compact('titres','navs','homes','features','testimonials','portfolios','contacts','footers'));
});
Route::get('/welcomeback', function () {
    return view('back/pages/welcomeback');
});


//-------------------------- TITRE --------------------------
Route::get('/titre', function () {
    $titres = Titre::all();
    return view('back/pages/titre', compact('titres'));
}); 
Route::get("back/pages/titre", [TitreController::class, "index"])->name("titres.index");
Route::post("back/titre/{id}/delete", [TitreController::class, "destroy"])->name("titre.destroy");
Route::get("back/titre/{id}/edit", [TitreController::class, "edit"])->name("titre.edit");
Route::post("back/titre/{id}/update", [TitreController::class, "update"])->name("titre.update");

//-------------------------- NAV --------------------------
Route::get('/nav', function () {
    $navs = Nav::all();
    return view('back/pages/nav', compact('navs'));
});
Route::get("back/pages/nav", [NavController::class, "index"])->name("navs.index");
Route::post("back/nav/{id}/delete", [NavController::class, "destroy"])->name("nav.destroy");
Route::get("back/nav/{id}/edit", [NavController::class, "edit"])->name("nav.edit");
Route::post("back/nav/{id}/update", [NavController::class, "update"])->name("nav.update");


//-------------------------- HOME --------------------------
Route::get('/home', function () {
    $homes = Home::all();
    return view('back/pages/home', compact('homes'));
});


//-------------------------- FEATURE --------------------------
Route::get('/features', function () {
    $features = Feature::all();
    return view('back/pages/features', compact('features'));
});


//-------------------------- ABOUTUS --------------------------
Route::get('/testimonial', function () {
    $testimonials = Testimonial::all();
    return view('back/pages/testimonial', compact('testimonials'));
});


//-------------------------- PORTFOLIO --------------------------
Route::get('/portfolio', function () {
    $portfolios = Portfolio::all();
    return view('back/pages/portfolio', compact('portfolios'));
});


//-------------------------- FOOTER --------------------------
Route::get('/footer', function () {
    $footers = Footer::all();
    return view('back/pages/footer', compact('footers'));
});
