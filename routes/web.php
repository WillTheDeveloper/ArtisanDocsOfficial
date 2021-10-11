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

Route::get('/laravel/packages/nova/resourcefields', function () {
    return view('laravel.packages.nova.resourcefields');
});

//VAPOR
Route::get('/laravel/packages/vapor/vaporinstallation', function () {
    return view('laravel.packages.vapor.vaporinstallation');
});

Route::get('/laravel/packages/vapor/settingupvapor', function () {
    return view('laravel.packages.vapor.settingupvapor');
});

Route::get('/laravel/packages/vapor/deployingtovapor', function () {
    return view('laravel.packages.vapor.deployingtovapor');
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

Route::get('/livewire/prerequisites', function () {
    return view('livewiredocs.prerequisites');
});

Route::get('/livewire/installation', function () {
    return view('livewiredocs.installation');
});

Route::get('/livewire/components', function () {
    return view('livewiredocs.components');
});

//DATABASE PAGES - inside database directory
Route::get('/database', function () {
    return view('database.database');
});
