<?php

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
    return 'welcome';
});


// =====================================================
Route::get('/{id}', function($id){
    return 'this is id: ' . $id;
});
Route::get('/{id}/{name}', function($id,$name){
    return 'this is id: '  . $id .'<br>'.'and name is: ' . $name;
});

