<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('editoriales', App\Http\Controllers\EditorialController::class)
    ->except(['show'])
    ->middleware('auth');

