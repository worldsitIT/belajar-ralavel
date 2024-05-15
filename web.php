<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("homepage");

Route::get('/beranda', function () {
    sleep(5);
    return redirect()->route("homepage");
});

Route::get('/users', function () {
    return view("users.users");
});
