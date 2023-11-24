<?php


Route::get('/', function () {
    return view('index');
});
Route::get('/about', 'About@halaman_about');
Route::get('/contact', 'Contact@halaman_contact');



