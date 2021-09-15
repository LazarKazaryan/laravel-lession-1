<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get(
    '/contact/all/{id}',
    "App\Http\Controllers\ContactController@showOneMessage"
)->name("contact-data-one");

Route::get(
    '/contact/all/{id}/edit',
    "App\Http\Controllers\ContactController@editMessage"
)->name("contact-edit");

Route::get(
    '/contact/all/{id}/delete',
    "App\Http\Controllers\ContactController@deleteMessage"
)->name("contact-delete");

Route::get('/contact/all', "App\Http\Controllers\ContactController@allData")->name("contact-data");
Route::post('/contact/submit', "App\Http\Controllers\ContactController@submit")->name("contact-form");

Route::post(
    '/contact/all/{id}/edit',
    "App\Http\Controllers\ContactController@editMessageSubmit"
)->name("contact-edit-submit");