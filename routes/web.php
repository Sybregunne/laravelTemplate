<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/contacts', function () { return view('contacts'); })->name('contacts');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');
Route::get('/register', function () { return view('register'); })->name('register');
Route::get('/dashboard', function () { return view('dashboard.dashboard'); })->name('dashboard');
Route::get('/dashboard/customers', function () { return view('dashboard.customers'); })->name('customers');
Route::get('/dashboard/profile', function () { return view('dashboard.profile'); })->name('profile');
