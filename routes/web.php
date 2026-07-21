<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/services', 'pages.services')
    ->name('services');

Route::view('/work', 'pages.work.index')
    ->name('work.index');

Route::view('/work/407-haul-away', 'pages.work.407-haul-away')
    ->name('work.407-haul-away');

Route::view('/about', 'pages.about')
    ->name('about');

Route::view('/contact', 'pages.contact')
    ->name('contact');

Route::view('/privacy', 'pages.privacy')
    ->name('privacy');
