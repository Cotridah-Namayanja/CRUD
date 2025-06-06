<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
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
Route::DELETE('/delete/{recipe}', [RecipeController::class, 'destroy'])->name('deleterecipe');

Route::get('/addchef', [ChefController::class,'addchef'])->name('addchef');
Route::get('/cheflist', [ChefController::class,'cheflist'])->name('cheflist');

 Route::post('/storechef', [ChefController::class, 'store'])->name('savechef');
 Route::get('/editchef/{chef}', [ChefController::class, 'editchef'])->name('editchef');
 Route::POST('/update/{chef}', [ChefController::class, 'updatechef'])->name('updatechef');

 Route::get('/showchef/{chef}', [ChefController::class, 'show'])->name('showchef');
 Route::DELETE('/deletechef/{chef}', [ChefController::class, 'destroy'])->name('deletechef');
 Route::get('/search', [ChefController::class, 'search'])->name('searchchef');





// route::('/chefs')
// route::('/chefs/store')
// route::('/chefs/edit/{chef}')
// route::('/chefs/show/{chef}')

// route::('/teachers')
// route::('/teachers/store')
// route::('/teachers/edit/{chef}')
// route::('/teachers/show/{chef}')


