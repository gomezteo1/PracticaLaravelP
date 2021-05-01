<?php
Route::get('/', function(){return view('welcome'); });

Route::resource('trainers','TrainerController');
Route::resource('pokemons','PokemonController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
