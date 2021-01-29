<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Livewire\ResponsablsComponent;
use Livewire\ParticipantsComponent;
use Livewire\MenuCursosInscripcion;
use Livewire\InscriptionComp;

// use App\Incription;
// use App\User;
//use App\Profession;
// use App\Curso;


// Route::get('/prof','Controller@pdf');
//Route::get('/chec','Controller@chec');






Route::get('/', function () {
    return view('Menu.home');
})->name('welcome');

Route::get('/nosotros', function () {
    return view('Menu.nosotros');
})->name('nosotros');		



//Route::get('/asoc', function () {
	//return view('asoc');
//})->name('ASOC-livew');
Route::get('/aulas', function() {
	return view('Menu.AV.aulas');
})->name('AV-livew');


Route::get('/ideas', function () {
    return view('Menu.ideas.ideas');
})->name('ideas');	
Route::get('/tienda', function () {
    return view('Menu.tienda');
})->name('tienda');


//integrar rutas al componente MenuCursos-Inscripcion add commentarios
Route::get('/cursos', function () {   
    return view('Menu.Cursos_Insc_Comm.index');
})->name('cursos.index');



// Route::resource('/cursos', 'MenuCursosInscripcion')->name('cursos.index');




//Route::post('/cursos', MenuCursosInscripcion::class, 'comment');
//Route::post('/cursos', 'CursController@comment')->name('comment');
Route::post('/cursos', 'CommentController@store')->name('comment');

Route::get('/inscribirse/{id?}','InscripcionController@index')->name('inscribirse');   
Route::post('/inscribirse', 'InscripcionController@save')->name('save');











//VIEW ADMIN
Route::get('/privileged-user', function(){
	return view('Admin.tool');
})->name('Admin');

Route::get('/Admin-class', function() {
	return view('Admin.Class.aulas');
})->name('class');

//---------USER
Auth::routes();
Route::get('/auth/register', function(){
	return view('auth/register');
})->name('register'); 





// RUTAS PRITEGIDAS (ADM)

Route::get('/auth/AdmUsers/tool', 'Auth\RegisterController@index')->name('AdmUser');
Route::get('/auth/AdmUser/detalle/{id}', 'Auth\RegisterController@ver')->name('ver');
Route::post('/auth/register', 'Auth\RegisterController@create')->name('createUser');

Route::get('/admin-cursos','CursController@index')->name('cursos');
Route::get('/new-curso', 'CursController@create')->name('Newcurso');
Route::post('/new-curso','CursController@store')->name('SaveCurso');
Route::get('/edit-curs/{id?}', 'CursController@edit')->name('EditCurs');
Route::put('/edit-curs/{id}','CursController@update')->name('UpCurso');

Route::middleware('auth:web')->group(function () {
    //Route::get('/responsabls/index/{id?}',ResponsablsComponent::class)->name('resp-livew');
    //Route::get('/participants/index/{id?}',ParticipantsComponent::class)->name('part-livew');
    Route::get('/Responsabls',function(){
		return view('Admin.responsabls/index');
	})->name('resp-livew');
	                           	
	Route::get('/Participants',function(){	
		return view('Admin.participants.index');
	})->name('part-livew');
	
	Route::get('/admin-inscription',function(){
		//$reg = App\Incription::with('curs')->get();		
		return view('Admin.Inscrip.index');
	})->name('insc-auth');


    
});



Route::post('/Admin.inscription', 'PdfController@ConfSave')->name('ConfSave');


// RUTAS SIN LOGIN
//Ruta vuejs   
//Route::apiResource('/cursos', 'VueCursosControlle');
















		





// Route::get('/orm', function(){
// 	$curso = Curso::find(1);

// 	$curso->comments;
// 	return $curso;

// });