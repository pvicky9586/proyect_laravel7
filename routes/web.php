<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;





Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/help', 'Controller@cursos');

Auth::routes();
//---------USER


Route::get('/auth/register', function(){
	return view('auth/register');
})->name('register');

Route::get('/auth/AdmUsers/tool', 'Auth\RegisterController@index')->name('AdmUser');


//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::get('/auth/AdmUser/detalle/{id}', 'Auth\RegisterController@ver')->name('ver');
Route::post('/auth/register', 'Auth\RegisterController@create')->name('createUser');

// CURSOS
Route::get('/cursos/index','CursController@index')->name('cursos');
Route::get('/cursos/new', 'CursController@create')->name('Newcurso');
Route::post('/cursos/new','CursController@store')->name('SaveCurso');
Route::get('/cursos/EditCurs/{id?}', 'CursController@edit')->name('EditCurs');
Route::put('/cursos/EditCurs/{id}','CursController@update')->name('UpCurso');
  
//Rutas vuejs

Route::apiResource('/cursos', 'VueCursosControlle');

//RUTA LIVEWIRE

Route::get('/aulas', function() {
		return view('aulas');
	})->name('AV-livew');
		

Route::get('/responsabls/index',function(){
		return view('responsabls/index');
	})->name('resp-livew');
	 
Route::get('/participants/index',function(){
		return view('participants/index');
	})->name('part-livew');


	//Route::get('/asoc', function () {
		//return view('asoc');
	//})->name('ASOC-livew');

