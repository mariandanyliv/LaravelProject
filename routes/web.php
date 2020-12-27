<?php

use App\Http\Controllers\MainController;
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
Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/addArtical', 'App\Http\Controllers\MainController@addArtical');

Route::get('/read_paper/{id}', 'App\Http\Controllers\MainController@read_paper')->name('read_paper');

Route::post('/formAdd/check', 'App\Http\Controllers\MainController@formAdd_check');
Route::post('/formDel/check', 'App\Http\Controllers\MainController@formDel_check');
Route::post('/formUpd/check', 'App\Http\Controllers\MainController@formUpd_check')->name('formUpd_check');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: ' . $id . ' name: ' . $name;
// });
