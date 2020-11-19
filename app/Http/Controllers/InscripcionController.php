<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class InscripcionController extends Controller
{
    public function index($id){
		  $curso = App\Cursos::findOrFail($id);
		return view('Menu/Cursos_Insc/inscribirse',compact('curso'));
	}
	
	
	public function save(Request $request){
		   
		$request->validate(['cedula' => 'required']); 
	                                         
	   $Buscpart = App\Participants::where('cedula','=',$request->cedula)->first();
	  
		if($Buscpart){
			$Buscpart->name = $request->name;
			$Buscpart->last_name = $request->last_name;	
			$Buscpart->email = $request->email;
			$Buscpart->telef = $request->telef;                                          
			$Buscpart->NroWp = $request->NroWp;
			$Buscpart->save();			
		}else{
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
		$Busc1 = App\Incripcion::where('id_part','=',$BuscNewpart->id)->first();	
		$Busc2 = App\Incripcion::where('id_curso','=',$request->id_curso)->first();	
		if ($Busc1 == $Busc2){
			return redirect()->route('MenuCursos')->with('mensaje','Ya Usted se encuentra registrado es este curso, consulte contactanos para mas informacion');
		} else{ //buscar en la tabla de inscrpcion si participante esta inscrito en dicho curso
			  
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
		}
		
		
			 
		return redirect()->route('MenuCursos');
	}
}
