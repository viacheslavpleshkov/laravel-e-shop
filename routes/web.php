<?php

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

Route::get('/', function () {return view('site.pages.index');})->name('site.index');
Route::get('running', function () {return view('site.pages.index');})->name('site.running');
Route::get('football', function () {return view('site.pages.index');})->name('site.football');
Route::get('cycling', function () {return view('site.pages.index');})->name('site.cycling');
Route::get('fitness', function () {return view('site.pages.index');})->name('site.fitness');
Route::get('tennis', function () {return view('site.pages.index');})->name('site.tennis');
Route::get('contact', function () {return view('site.pages.index');})->name('site.contact');
