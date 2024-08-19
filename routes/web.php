<?php

use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\KitchenController;
use App\Http\Controllers\Admin\RecipeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->name("admin.")->prefix('admin')
    ->group(function(){
        Route::resource('recipes', RecipeController::class);
        Route::resource('kitchens', KitchenController::class);
        Route::resource('ingredients', IngredientController::class);
    });
