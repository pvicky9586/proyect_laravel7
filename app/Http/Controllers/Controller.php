<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

// use Barryvdh\DomPDF\Facade as PDF;

// use App\Profession;



use App;

class Controller extends BaseController
{
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	// public function pdf(){
	// 	$prof = App\Profession::get();
	// 	$pdf = PDF::loadView('pdf-prof', compact('prof'));
   		
 //   		return $pdf->download('prof-list.pdf');
	// }

   	public function chec(){
   		
   		return view('chec');
	}
	      
		// public function cursos(Request $request){
		//    $cursos = App\Curso::all();
		// 	return view('help',compact('cursos'));
		// }

	
	




}
