<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Livewire\ResponsablsComponent;
use Livewire\ParticipantsComponent;
 


 


Route::get('/', function () {
    return view('Menu/home');
})->name('welcome');


Route::get('/Menu/menu', function () {
    return view('Menu.menu');
})->name('menu');

Route::get('/Menu/nosotros', function () {
    return view('Menu.nosotros');
})->name('nosotros');		

Route::get('/Menu/Cursos_Insc/index', function () {   
    return view('Menu/Cursos_Insc.index');
})->name('MenuCursos');


 Route::get('/Menu/Cursos_Insc/inscribirse/{id?}','InscripcionController@index')->name('inscribirse');   
 Route::post('/Menu/Cursos_Insc/inscribirse', 'InscripcionController@save')->name('inscribir');

//---------USER

Auth::routes();
Route::get('/auth/register', function(){
	return view('auth/register');
})->name('register'); 
Route::get('/auth/AdmUsers/tool', 'Auth\RegisterController@index')->name('AdmUser');
Route::get('/auth/AdmUser/detalle/{id}', 'Auth\RegisterController@ver')->name('ver');
Route::post('/auth/register', 'Auth\RegisterController@create')->name('createUser');

// RUTAS PRITEGIDAS (ADM)
Route::get('/cursos/index','CursController@index')->name('cursos');
Route::get('/cursos/new', 'CursController@create')->name('Newcurso');
Route::post('/cursos/new','CursController@store')->name('SaveCurso');
Route::get('/cursos/EditCurs/{id?}', 'CursController@edit')->name('EditCurs');
Route::put('/cursos/EditCurs/{id}','CursController@update')->name('UpCurso');
  


Route::middleware('auth:web')->group(function () {
    //Route::get('/responsabls/index/{id?}',ResponsablsComponent::class)->name('resp-livew');
    //Route::get('/participants/index/{id?}',ParticipantsComponent::class)->name('part-livew');
    Route::get('/responsabls/index',function(){
		return view('responsabls/index');
	})->name('resp-livew');
	                           	
	Route::get('/participants/index',function(){	
		return view('participants/index');
	})->name('part-livew');
	
	//Route::get('/post', Posts::class);
    
});






// RUTAS SIN LOGIN
//Ruta vuejs   
//Route::apiResource('/cursos', 'VueCursosControlle');

//RUTA LIVEWIRE 
Route::get('/aulas', function() {
	return view('aulas');
})->name('AV-livew');
		
//Route::get('/asoc', function () {
	//return view('asoc');
//})->name('ASOC-livew');
