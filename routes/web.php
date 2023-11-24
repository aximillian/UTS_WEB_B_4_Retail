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

// all 
Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/register', function () {
    return view('Register');
});

Route::get('logout', function () {

    return redirect('/'); // Mengarahkan kembali ke halaman login setelah logout
});

//store routes
Route::get('/store/homePage', function () {
    return view('store/homePage');
});

Route::get('/store/bd', function () {
    return view('store/BookDetail');
});

Route::get('/store/Profile', function () {
    return view('store/profile');
});

Route::get('/store', function () {
    return view(
        'store/homePage'
    );
});

Route::get('/store/Review', function () {
    return view(
        'store/Review'
    );
});

Route::get('/store/Cart', function () {
    return view('store/cart');
});

Route::get('cart', function () {
    return view('store/cart');
});

Route::get('/store/detailPesanan', function () {
    return view('store/detailPesanan');
});


//admin routes

Route::get('/adminPage', function () {
    return view('adminPage');
});

Route::get('/admin/Order', function () {
    return view('admin/user');
});

Route::get('/admin/Produk', function () {
    return view('admin/produk');
});
Route::get('/admin/p', function () {
    return view('admin/profileAdmin');
});
Route::get('/admin/daftar', function () {
    return view('admin/daftar');
});
Route::get('/admin/edit', function () {
    return view('admin/edit');
});

Route::get('/admin/editUser', function () {
    return view('admin/editUser');
});

Route::get('/admin/addUser', function () {
    return view('admin/addUser');
});

