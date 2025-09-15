<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return view('laravel');
});
Route::get('/about', function () {
    return view('about',['nama'=>'kemal']);
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog',['nama'=>'kemal']);
});
Route::get('/contact', function () {
    return view('contact',['nama'=>'kemal']);
});
