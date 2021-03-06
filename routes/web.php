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
Route::get("back/pages/home", [HomeController::class, "index"])->name("homes.index");
Route::post("back/home/{id}/delete", [HomeController::class, "destroy"])->name("home.destroy");
Route::get("back/home/{id}/edit", [HomeController::class, "edit"])->name("home.edit");
Route::post("back/home/{id}/update", [HomeController::class, "update"])->name("home.update");


//-------------------------- FEATURE --------------------------
Route::get('/features', function () {
    $features = Feature::all();
    return view('back/pages/features', compact('features'));
});
Route::get("back/pages/features", [FeatureController::class, "index"])->name("features.index");
Route::post("back/feature/{id}/delete", [FeatureController::class, "destroy"])->name("feature.destroy");
Route::get("back/feature/{id}/edit", [FeatureController::class, "edit"])->name("feature.edit");
Route::post("back/feature/{id}/update", [FeatureController::class, "update"])->name("feature.update");


//-------------------------- PORTFOLIO --------------------------
Route::get('/portfolio', function () {
    $portfolios = Portfolio::all();
    return view('back/pages/portfolio', compact('portfolios'));
});
Route::get("back/pages/portfolio", [PortfolioController::class, "index"])->name("portfolios.index");
Route::post("back/portfolio/{id}/delete", [PortfolioController::class, "destroy"])->name("portfolio.destroy");
Route::get("back/portfolio/{id}/edit", [PortfolioController::class, "edit"])->name("portfolio.edit");
Route::post("back/portfolio/{id}/update", [PortfolioController::class, "update"])->name("portfolio.update");



//-------------------------- TESTIMONIAL --------------------------
Route::get('/testimonial', function () {
    $testimonials = Testimonial::all();
    return view('back/pages/testimonial', compact('testimonials'));
});
Route::get("back/pages/testimonial", [TestimonialController::class, "index"])->name("testimonials.index");
Route::post("back/testimonial/{id}/delete", [TestimonialController::class, "destroy"])->name("testimonial.destroy");
Route::get("back/testimonial/{id}/edit", [TestimonialController::class, "edit"])->name("testimonial.edit");
Route::post("back/testimonial/{id}/update", [TestimonialController::class, "update"])->name("testimonial.update");



//-------------------------- FOOTER --------------------------
Route::get('/footer', function () {
    $footers = Footer::all();
    return view('back/pages/footer', compact('footers'));
});
Route::get("back/pages/footer", [FooterController::class, "index"])->name("footers.index");
Route::post("back/footer/{id}/delete", [FooterController::class, "destroy"])->name("footer.destroy");
Route::get("back/footer/{id}/edit", [FooterController::class, "edit"])->name("footer.edit");
Route::post("back/footer/{id}/update", [FooterController::class, "update"])->name("footer.update");

