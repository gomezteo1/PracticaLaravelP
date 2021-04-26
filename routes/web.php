<?php
Route::get('/', function(){
    return view('welcome'); //esta ruta es la raiz del proyecto
});

Route::resource('trainers','TrainerController');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
