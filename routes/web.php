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
	return view('tasks');
});

Route::post('/task', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/task')
		->withInput()
		->withErrors($validator);
	}
});

Route::delete('/task/{id}', function ($id) {
	//
});