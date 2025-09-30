<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Routing Sederhana 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return 'Helo, nama';
});

// Routing dengan parameter 
Route::get('/user/{name}', function ($name){
    return "Nama saya $name";
});

// Route dengan parameter opsional
Route::get('/greet/{name?}', function ($name = 'Guest'){
    return "Nama saya $name";
});

// routing dengan view
Route::get('/profile', function (){
    return view('profile');
});

// routing data dengan view
Route::get('/about', function (){
    return view('about', ['name' => 'Nama anda']);
});

// Routing dengan Named route
Route::get('/home', function (){
    return 'Ini adalah halaman home';
})->name('home.page');