<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RecipeController::class,'index'])->name('recipelist');
Route::get('/create', [RecipeController::class, 'create'])->name('createrecipe');
Route::POST('/store', [RecipeController::class, 'store'])->name('saverecipe');
Route::get('/edit/{recipe}', [RecipeController::class, 'edit'])->name('editrecipe');
Route::POST('/update{recipe}', [RecipeController::class, 'update'])->name('updaterecipe');

Route::get('/show{recipe}', [RecipeController::class, 'show'])->name('showrecipe');



