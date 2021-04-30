<?php
Route::get('/', function(){return view('welcome'); });

Route::resource('trainers','TrainerController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
