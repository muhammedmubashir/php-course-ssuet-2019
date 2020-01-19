<?php

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

// Route::get("/aboutus",function() {
// 	return view("aboutus");
// });

// Route::get("/services",function() 
// {
// 	$data["services"][] = "Web Development";
// 	$data["services"][] = "Graphic Designing";
// 	$data["services"][] = "SEO";
// 	return view("services",$data);
// });


Route::get("/services","company@services");
Route::get("/aboutus","company@aboutus");

Route::get("/productcategories","categories@list");