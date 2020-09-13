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
    return view('welcome');
});

Route::get("/blank", function () {
    return view("blank");
});

Route::get("/home", function () {
    $names = "Aung Aung";
    return view("home", compact('names'));
});

Route::get("/customers/customeradd", "CustomerController@add");

Route::post("/customers/customeradd", "CustomerController@create");

Route::get("/customers/customerlist", "CustomerController@list");

Route::get("/customers/detail/{id}", "CustomerController@detail");

Route::get("/customers/update/{id}", "CustomerController@edit");

Route::post("/customers/update", "CustomerController@update");

Route::get("/customers/delete/{id}", "CustomerController@delete");

// Route::get("/posts", "PostController@index");
// Route::get("/posts/create", "PostController@create");
// Route::post("/posts", "PostController@store");
// Route::get("/posts/{id}", "PostController@show");
// Route::get("/posts/{id}/edit", "PostController@edit");
// Route::patch("/posts/{post}", "PostController@update");
// Route::delete("/posts/{post}", "PostController@destroy");
Route::resource("posts", "PostController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
