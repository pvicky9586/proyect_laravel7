<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class InscripcionController extends Controller
{
    public function index(Request $request){
			$curso = App\Cursos::findOrFail($request->id); 
			if ($curso){
				return view('Menu/Cursos_Insc/inscribirse',compact('curso'));
			}
	}
	
	
	public function save(Request $request){
		   
		$request->validate(['cedula' => 'required']); 
	                                         
	   $Buscpart = App\Participants::where('cedula','=',$request->cedula)->first();
	  
		if (isset($Buscpart)){
		//echo " existe";
			$Buscpart->name = $request->name;
			$Buscpart->last_name = $request->last_name;	
			$Buscpart->email = $request->email;
			$Buscpart->telef = $request->telef;                                          
			$Buscpart->NroWp = $request->NroWp;
			$Buscpart->save();			
		
		} else {
		//echo "No existe";
			$part = App\Participants::create([
			'cedula' => $request->cedula,
			'name' => $request->name,	
			'last_name' => $request->last_name,
			'email' => $request->email,
			'telef' => $request->telef,                                          
			'NroWp' => $request->NroWp		
			]);	
		}
		$BuscNewpart = App\Participants::where('cedula','=',$request->cedula)->first();	 
		$Busc1 = App\Incripcion::where('id_curso','=',$request->id_curso)->get();
		$Num = count($Busc1); 		
		for ($i=0; $i<$Num; $i++){
			if ($Busc1[$i]->id_part == $BuscNewpart ->id){
				
			     return redirect()->route('MenuCursos')->with('mensaje','Ya Usted se encuentra registrado es este curso, consulte contactanos para mas informacion');	
			    
			}    
			
		}
		$insc= App\Incripcion::create([ 
		'id_part' => $BuscNewpart->id,		
		'id_curso' => $request->id_curso
		]);
			
		$pago = App\Incripcion_pago::create([
		'id_curso' => $request->id_curso,
		'id_part' => $BuscNewpart->id,
		'meth_pago' => $request->meth_pago,
		'pago' => $request->pago 		
		]);
		
		return redirect()->route('MenuCursos');
	}
}
