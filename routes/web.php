<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('demo'); })->name('demo');
Route::get('/index', function () { return view('index'); })->name('index');
Route::get('/contacts', function () { return view('contacts'); })->name('contacts');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');
Route::get('/register', function () { return view('register'); })->name('register');
Route::get('/dashboard', function () { return view('dashboard.dashboard'); })->name('dashboard');
Route::get('/dashboard/customers', function () { return view('dashboard.customers'); })->name('customers');
Route::get('/dashboard/profile', function () { return view('dashboard.profile'); })->name('profile');
Route::get('/dashboard/projects', function () { return view('dashboard.projects'); })->name('projects');
Route::get('/dashboard/projects/project', function () { return view('dashboard.project'); })->name('project');
Route::get('/app-ui/contact-form-basic', function () { return view('app-ui.contact-form-basic'); })->name('contact-form-basic');
Route::get('/app-ui/file-storage', function () { return view('app-ui.file-storage'); })->name('file-storage');
Route::get('/app-ui/fitness-tracker', function() { return view('app-ui.fitness-tracker'); })->name('fitness-tracker');
Route::get('/app-ui/login-buttons-top', function() { return view('app-ui.login-buttons-top'); })->name('login-buttons-top');
Route::get('/app-ui/login-form', function() { return view('app-ui.login-form'); })->name('login-form');
Route::get('/app-ui/newsletter-preferences', function() { return view('app-ui.newsletter-preferences'); })->name('newsletter-preferences');
Route::get('/app-ui/newsletter', function() { return view('app-ui.newsletter'); })->name('newsletter');
Route::get('/app-ui/notes', function() { return view('app-ui.notes'); })->name('notes');
Route::get('/app-ui/password-recovery', function() { return view('app-ui.password-recovery'); })->name('password-recovery');
Route::get('/app-ui/product-card', function() { return view('app-ui.product-card'); })->name('product-card');
Route::get('/app-ui/profile-card', function() { return view('app-ui.profile-card'); })->name('profile-card');
Route::get('/app-ui/register', function() { return view('app-ui.register'); })->name('register');
Route::get('/app-ui/sales-report', function() { return view('app-ui.sales-report'); })->name('sales-report');
Route::get('/app-ui/social-feed', function() { return view('app-ui.social-feed'); })->name('social-feed');
Route::get('/app-ui/todo', function() { return view('app-ui.todo'); })->name('todo');
Route::get('/app-ui/wallet', function() { return view('app-ui.wallet'); })->name('wallet');
Route::get('/app-ui/weather-forecast', function() { return view('app-ui.weather-forecast'); })->name('weather-forecast');