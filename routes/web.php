<?php

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

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    returnview('welcome');
});

Route::get('/task', function () {
	//
});

Route::post('/task', function (Request $request) {
	//
});

Route::delete('/task/{id}', function ($id) {
	//
});