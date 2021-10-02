<?php

use Illuminate\Support\Facades\Route;

//MAIN PAGES - root directory
Route::get('/', function () {
    return view('home');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

//LARAVEL PAGES - inside laravel directory
Route::get('/laravel', function () {
    return view('laravel.laravel');
});

Route::get('/laravel/prerequisites', function () {
    return view('laravel.prerequisites');
});

Route::get('/laravel/installation', function () {
    return view('laravel.installation');
});

Route::get('/laravel/versioncontrol', function () {
    return view('laravel.versioncontrol');
});

Route::get('/laravel/folderstructure', function () {
    return view('laravel.folderstructure');
});

Route::get('/laravel/firstproject', function () {
    return view('laravel.firstproject');
});

Route::get('/laravel/installingpackages', function () {
    return view('laravel.installingpackages');
});

Route::get('/laravel/troubleshooting', function () {
    return view('laravel.troubleshooting');
});

//LARAVEL PACKAGES

//NOVA
Route::get('/laravel/packages/nova/novainstallation', function () {
    return view('laravel.packages.nova.novainstallation');
});

Route::get('/laravel/packages/nova/creatingresources', function () {
    return view('laravel.packages.nova.creatingresources');
});


//TAILWIND PAGES - inside tailwind directory
Route::get('/tailwind', function () {
    return view('tailwind.tailwind');
});

Route::get('/tailwind/prerequisites', function () {
    return view('tailwind.prerequisites');
});

Route::get('/tailwind/installation', function () {
    return view('tailwind.installation');
});

Route::get('/tailwind/troubleshooting', function () {
    return view('tailwind.troubleshooting');
});

//LIVEWIRE PAGES - inside livewiredocs directory
Route::get('/livewire', function () {
    return view('livewiredocs.livewire');
});

//DATABASE PAGES - inside database directory
Route::get('/database', function () {
    return view('database.database');
});
