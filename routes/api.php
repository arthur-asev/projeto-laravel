<?php
use Illuminate\Support\Facades\Route;

Route::apiResource('dogs','App\Http\Controllers\DogController');
Route::get('/dogs/{id}',[DogController::class,'show'])->name('dogs.show');
Route::get('/dogs',[DogController::class,'index'])->name('dogs.index');