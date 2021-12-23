<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MailController;
use App\Models\Post;
use App\Models\Site;
use App\Models\Contact;
use App\Models\Hotel;
use App\Models\Restaurant;
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

//Main site
Route::view('/', 'index');
Route::view('index', 'index');
Route::view('carte', 'carte');
Route::view('transport', 'transport');
Route::view('infos', 'infos');

Route::resource('sitesTouristiques', SiteController::class);
Route::resource('actualite', PostController::class);
Route::resource('contact', ContactController::class);
Route::resource('hotels', HotelController::class);
Route::resource('restaurants', RestaurantController::class);

View::composer(['/', 'index'], function($view){
    $sites = Site::orderBy('created_at', 'desc')->take(3)->get();
    $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    $hotels = Hotel::orderBy('created_at', 'desc')->take(3)->get();
    $restaurants = Restaurant::orderBy('created_at', 'desc')->take(3)->get();
    $view->with('posts', $posts);
    $view->with('sites', $sites);
    $view->with('hotels', $hotels);
    $view->with('restaurants', $restaurants);
});

//Admin
Route::view('/dashboard', 'dashboard.dashboard');

Route::get('/dashboard/editEvent', 'App\Http\Controllers\PostController@editEvent');
Route::get('/dashboard/editSite', 'App\Http\Controllers\SiteController@editSite');
Route::get('/dashboard/editHotel', 'App\Http\Controllers\HotelController@editHotel');
Route::get('/dashboard/editRestaurant', 'App\Http\Controllers\RestaurantController@editRestaurant');

View::composer(['/dashboard', 'dashboard.dashboard'], function($view){
    $sites = Site::orderBy('created_at', 'desc')->take(5)->get();
    $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
    $hotels = Hotel::orderBy('created_at', 'desc')->take(5)->get();
    $restaurants = Restaurant::orderBy('created_at', 'desc')->take(5)->get();
    $contacts = Contact::orderBy('created_at', 'desc')->take(5)->get();
    $view->with('posts', $posts);
    $view->with('sites', $sites);
    $view->with('hotels', $hotels);
    $view->with('restaurants', $restaurants);
    $view->with('contacts', $contacts);
});

Route::get('/dashboard/messages', 'App\Http\Controllers\ContactController@show');
Route::get('/dashboard/messages/answer', 'App\Http\Controllers\MailController@index');

