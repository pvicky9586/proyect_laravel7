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



Route::get('/auth/AdmUser/detalle/{id}', 'Auth\RegisterController@ver')->name('ver');
Route::post('/auth/register', 'Auth\RegisterController@create')->name('createUser');

// CURSOS
Route::get('/cursos/index','CursController@index')->name('cursos');
Route::get('/cursos/new', 'CursController@create')->name('Newcurso');
Route::post('/cursos/new','CursController@store')->name('SaveCurso');
Route::get('/cursos/EditCurs/{id?}', 'CursController@edit')->name('EditCurs');
Route::put('/cursos/EditCurs/{id}','CursController@update')->name('UpCurso');
  
 //Responsabls
 Route::get('/cursos/responsabls', function(){
	return view('cursos/responsabls');
})->name('responsabls');

Route::post('/cursos/ressponsabls','ResponsablsController@store')->name('SaveResp');


// participants
Route::get('/Participants/index','ParticipantsController@index')->name('participants');	
Route::get('/Participants/new','ParticipantsController@create')->name('newPart');			
Route::post('/Participants/new','ParticipantsController@store')->name('savePart');			
Route::get('/Participants/ver/{id}','ParticipantsController@show')->name('verPart');	
Route::get('/Participants/editar/{id}','ParticipantsController@edit')->name('EditPart');

//Rutas vuejs

Route::apiResource('/cursos', 'VueCursosControlle');

//RUTA LIVEWIRE

Route::get('/responsabls/index',function(){
	return view('responsabls/index');
})->name('resp-livew');
 
 
Route::get('/aulas', function() {
    return view('aulas');
})->name('AV-livew');


//Route::get('/asoc', function () {
    //return view('asoc');
//})->name('ASOC-livew');
