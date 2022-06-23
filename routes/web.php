<?php

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
    return view('login');
});

Route::get("/login", "App\Http\Controllers\LoginController@login")->name("login");
Route::get("/logout", "App\Http\Controllers\LoginController@logout")->name("logout");
Route::post("/login", "App\Http\Controllers\LoginController@checkLogin");

Route::get('/register', "App\Http\Controllers\RegisterController@index")->name('register');
Route::post('/register', "App\Http\Controllers\RegisterController@create")->name('newAccount');
Route::get('/register/email/{query}', "App\Http\Controllers\RegisterController@checkEmail");
Route::get("/register/username/{q}", "App\Http\Controllers\RegisterController@checkUsername");

Route::get('/home', "App\Http\Controllers\HomeController@index")->name('home');
Route::get('/load_home', "App\Http\Controllers\HomeController@loadContenuti");
Route::get('/check_preferiti', "App\Http\Controllers\HomeController@checkPreferiti");
Route::get('/check_user', "App\Http\Controllers\HomeController@checkCurrentUser");
Route::get('/getSong', "App\Http\Controllers\HomeController@getSong");

Route::post('/add_preferiti', "App\Http\Controllers\HomeController@addPreferiti");
Route::post('/remove_preferiti', "App\Http\Controllers\HomeController@removePreferiti");

Route::get("/contactus", "App\Http\Controllers\contactusController@index")->name("contactus");
Route::post("/contactus_invia", "App\Http\Controllers\contactusController@invio")->name("contactusInvio");

Route::get("/preferiti", "App\Http\Controllers\preferitiController@index")->name("preferiti");

Route::get('/main', "App\Http\Controllers\mainController@index")->name('main');
Route::post('/remove_mex', "App\Http\Controllers\mainController@removeMex");
Route::get('/load_main', "App\Http\Controllers\mainController@loadContactUs");

Route::get('/Post', "App\Http\Controllers\PostController@index")->name('Post');
Route::post("/post_nuovo", "App\Http\Controllers\PostController@nuovoPost")->name("PostNuovo");



