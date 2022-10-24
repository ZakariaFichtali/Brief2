<?php

use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});



// ------------- add ----------------
Route::get('/add', function () {
    return view('add');
});

Route::get('/insert',[PromotionController::class, 'add']);



// ------------- select ----------------
Route::get('ViewData',[PromotionController::class, 'select']);



// ------------- Edit ----------------
// Route::get('/Edit/{id}', [PromotionController::class, 'Edit']);



Route::get('Edit/{id}', [PromotionController::class ,'Edit']);

Route::put('update/{id}', [PromotionController::class ,'update']);



// ------------- Delete ----------------

Route::get('delete/{id}', [PromotionController::class ,'delete']);
