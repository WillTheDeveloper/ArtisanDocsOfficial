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

//MAIN PAGES - root directory
Route::get('/', function () {
    return view('home');
});

Route::get('/support', function () {
    return view('support');
});

//LARAVEL PAGES - inside laravel directory
Route::get('/laravel', function () {
    return view('laravel.laravel');
});

//TAILWIND PAGES - inside tailwind directory
Route::get('/tailwind', function () {
    return view('tailwind.tailwind');
});

//LIVEWIRE PAGES - inside livewiredocs directory
Route::get('/livewire', function () {
    return view('livewiredocs.livewire');
});

//DATABASE PAGES - inside database directory
Route::get('/database', function () {
    return view('database.database');
});
