<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
     

    public function ConfSave(Request $request) {
    	$Marc = Count($request->conf);
    	for($i=0; $i<$Marc; $i++){
    		$ins = App\Incription::find($request->conf[$i]);
        	$ins->update([
				'conf' => 1
			]); 
    	}
		$curso=App\Curso::find($request->curso);
		$inscs = App\Incription::where('curso_id', '=', $request->curso)->get();
		$parts = App\Participant::all();
	
	 	$pdf = PDF::loadView('Admin.Inscrip.pdf-valid', compact('curso','inscs','parts'));
  		return $pdf->download('listado-de-inscriptos.pdf');
    }





}
