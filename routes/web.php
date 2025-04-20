<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});
Route::redirect('/index.html', '/');

Route::get('/login', function () {
    return view('front.login');
});
Route::redirect('/login.html', '/login');

Route::get('/register', function () {
    return view('front.register');
});
Route::redirect('/register.html', '/register');

Route::get('/shop', function () {
    return view('front.shop');
});
Route::redirect('/shop.html', '/shop');

Route::get('/product', function () {
    return view('front.product');
});
Route::redirect('/product.html', '/product');

Route::get('/blog', function () {
    return view('front.blog');
});
Route::redirect('/blog.html', '/blog');

Route::get('/blog-details', function () {
    return view('front.blog-details');
});
Route::redirect('/blog-details.html', '/blog-details');

Route::get('/contact', function () {
    return view('front.contact');
});
Route::redirect('/contact.html', '/contact');

Route::get('/faq', function () {
    return view('front.faq');
});
Route::redirect('/faq.html', '/faq');

Route::get('/shopping-cart', function () {
    return view('front.shopping-cart');
});
Route::redirect('/shopping-cart.html', '/shopping-cart');

Route::get('/check-out', function () {
    return view('front.check-out');
});
Route::redirect('/check-out.html', '/check-out');