<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use FilesystemIterator ;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

use Auth;
use App;
use App\Comment;

//desde Admin
class CursController extends Controller
{
		 public function construct(){
			$this->middleware('auth');
		  }
   
    public function index(){
         $cursos = App\Curso::orderBy('id','DESC')->paginate(4);
		return view('Admin.cursos.index',compact('cursos'));
    }
          

    public function create()
    {
        $resp = App\Responsabl::all();
		return view('Admin.cursos/new',compact('resp'));		
    }


    public function store(Request $request){
        if(isset($_POST['btnsave'])){
				$request->validate([ 'title' => 'required', 'img' => 'image|max:1024', // 1MB Max
        ]);
				$NewCurso = new App\Curso;				
				$NewCurso->title = $request->title;
				$NewCurso->description = $request->description;
				$NewCurso->duracion = $request->duracion;	
				if($request->file('img')){ 
					$pash = Storage::disk('public')->put('cursos',$request->file('img'));  
					if ($pash){  
		                $NewCurso->img = $pash;
		               } 
				}				
				$NewCurso->cant_resps = $request->cant_resps; 
				$NewCurso->user_created = Auth::user()->id;
				$NewCurso->statud = $request->statud;
				$NewCurso->save();   
				
				
				$ult = App\Curso::all();
				$CursoUlt = $ult->last(); 
			if ($request->cant_resps == 1){
				$New = new App\CursoResp;  
				$New->curso_id = $CursoUlt->id;
				$New->resp_id = $request->resp_id; 				
				$New->save();
				//echo "un registro";
			}
			if ($request->cant_resps == 2){
				$resp=$request->resp;
				$ArrayIdResp = $_POST['resp'];
				$NumRespM = count($ArrayIdResp); 
				 //var_dump ($NumResp); 
				for($j=0; $j<$NumRespM; $j++){
					 $ArrayResp = App\Responsabl::where('id','=',$ArrayIdResp[$j])->first();
					  $New = new App\CursoResp;  					 
					  $New->curso_id = $CursoUlt->id; 
					  $New->resp_id = $ArrayResp->id;
					  $New->save();
				 } 
			}
		}		 	  
		return redirect()->route('cursos')->with('mensaje','New Curso Agregado');
    }












    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $resp = App\Responsabl::all();
		$edit = App\Curso::findOrFail($id);
		return view('Admin.cursos.EditCurs',compact('edit','resp'));
    }
    
    
    
    
    
    
    

    public function update(Request $request, $id) {                   
			if(isset($_POST['btnsave'])){  				
				$request->validate([ 'title' => 'required']);
				$update = App\Curso::findOrFail($id); 					  
				$update->title = $request->title;
				$update->description = $request->description;  
				$update->duracion = $request->duracion; 
				$update->statud = $request->statud; 
			if($request->file('img')){ 
				$pash = Storage::disk('public')->put('cursos',$request->file('img'));  
				if ($pash){  
		            $update->img = $pash;
		         } 
			}
			$update->cant_resps = $request->cant_resps; 
			$update->user_updated = Auth::user()->id;
			$update->save(); 
			$BuscResp = App\CursoResp::where('curso_id','=',$update->id )->get();  		
			$Num = $BuscResp->count();
			if (isset($BuscResp) and $Num > 0){
				for($i=1; $i<=$Num; $i++){ 
					$Eliminar= App\CursoResp::where('curso_id','=',$update->id )->first();
					$Eliminar->delete();  								    	
			     }
			} 				
			if ($request->cant_resps == 1){  
				$request->validate([ 'resp' => 'required']); 				
				$New = new App\CursoResp;  
				$New->curso_id = $update->id;
				$New->resp_id = $request->resp; 				
				$New->save();
			}
			if ($request->cant_resps == 2){
				$request->validate([ 'resp' => 'required']); 
				$resp=$request->resp;
				$ArrayIdResp = $_POST['resp'];
				$NumRespM = count($ArrayIdResp);  
				for($j=0; $j<$NumRespM; $j++){
					 $ArrayResp = App\Responsabl::where('id','=',$ArrayIdResp[$j])->first();
					  $New = new App\CursoResp;  					 
					  $New->curso_id = $update->id;					  
					  $New->resp_id = $ArrayResp->id;
					  $New->save();
				 } 
			}				  			
		return redirect()->route('cursos')->with('mensaje','Curso Actualizado');
		}		
	return redirect()->route('cursos');
	}




 	// public function comment(Request $request)
 	// {
 	// 	// return $request->all();
 	//  if(isset($_POST['btnsave'])){
 	// 	$request->validate([ 'name' => 'required', 'email' => 'required|email', 'comment' => 'required']);
 	// 	$SaveCom = new Comment;
 	// 	$SaveCom ->name =$request->name;
 	// 	$SaveCom ->email =$request->email;
 	// 	$SaveCom ->comment =$request->comment;
 	// 	$SaveCom ->curso_id =$request->curso_id;
 	// 	$SaveCom->save();
 		
 	// 	return redirect()->route('MenuCursos');
 	// 	}
 		
 	// }
 
    public function destroy($id)
    {
        //
    }
    
		
		
		
}
