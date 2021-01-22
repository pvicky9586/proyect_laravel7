<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;


//integrar meths a comp-livew 'MenuCursosInscComm'
class InscripcionController extends Controller
{
    public function index(Request $request){
			$curso = App\Curso::findOrFail($request->id); 
			if ($curso){
				return view('Menu/Cursos_Insc_Comm/inscribirse',compact('curso'));
			}
	}
	
	
	public function save(Request $request){		   
		$request->validate([
			'cedula' => 'required|max:10',
			'name' => 'required',
			'last_name' => 'required',
			'meth_pago' => 'required',
			'pago' => 'required',
			'email' => 'required|email'
		]);
		$Buscpart = App\Participant::where('cedula','=',$request->cedula)->first();
	    //echo $request->curso_id;
		if (isset($Buscpart)){
		//echo " existe";
			$Buscpart->name = $request->name;
			$Buscpart->last_name = $request->last_name;	
			$Buscpart->email = $request->email;
			$Buscpart->telef = $request->telef;                                          
			$Buscpart->NroWp = $request->NroWp;
			if(Auth::user()){
				$Buscpart->user_updated = Auth::user()->id;
			}
			$Buscpart->save();			
		
		}else {
		//echo "No existe";
			$part = App\Participant::create([
			'cedula' => $request->cedula,
			'name' => $request->name,	
			'last_name' => $request->last_name,
			'email' => $request->email,
			'telef' => $request->telef,                                          
			'NroWp' => $request->NroWp	
			]);				
		}
		$BuscNewpart = App\Participant::where('cedula','=',$request->cedula)->first();	 
		$Busc1 = App\Incription::where('curso_id','=',$request->curso_id)->get(); 
		$Num = count($Busc1);
		if(!isset($Busc1) and $Num >= 1){			 		
			for ($i=0; $i<$Num; $i++){
				if ($Busc1[$i]->part_id == $BuscNewpart->id){ 				
			     return redirect()->route('MenuCursos')->with('mensaje','Ya Usted se encuentra registrado es este curso, consulte contactanos para mas informacion');	
				} 
			}
		}else{   
		$insc = App\Incription::create([ 
		'part_id' => $BuscNewpart->id,		
		'curso_id' => $request->curso_id
		]);
							
		
		// $pago = App\IncriptionPago::create([
		// 	'incription_id' => $insc->id,
		// 	'meth_pago' => $request->meth_pago,
		// 	'pago' => $request->pago 		
		// 	]);

		//RELACION CON ELOQUENT 'error verif'
		$insc->pago()->create([
		'incription_id' => $insc->id,
		'meth_pago' => $request->meth_pago,
		'pago' => $request->pago 		
		]);
		return redirect()->route('MenuCursos')->with('mensaje','welcome to the course ');
		
		}	
		return redirect()->route('MenuCursos');
		
	}
	
	
	
	
	
	
}
