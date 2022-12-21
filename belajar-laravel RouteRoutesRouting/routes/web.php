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

Route::get('/contact', function () {
    return view('contact', ['name' =>'agung ra', 'phone' => '0833.....']);
});

//Route::view('/contact', 'contact', ['name' =>'agung ra', 'phone' => '0833.....']);

Route::redirect('/contact', '/contact-us');

Route::get('/product', function () {
    return 'product';
});

Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});

Route::get('admin/profil-admin', function () {
    return 'profil-admin';
});

Route::get('admin/about-admin', function () {
    return 'about-admin';
});

Route::get('admin/contact-admin', function () {
    return 'contact-admin';
});



