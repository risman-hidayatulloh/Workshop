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

//Route tampilan awal
Route::get('/', function () {
    return view('workshopVue');
});

//Route untuk /home ketika direfresh tidak tulisan Sorry, the page you are looking for could not be found.
Route::get('/{name}', function(){
	return redirect('/');
})->where('name', '[A-Za-z]+');