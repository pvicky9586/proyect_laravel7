<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use FilesystemIterator ;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;
use App;
class CursController extends Controller
{
		 public function __construct(){
			$this->middleware('auth');
		  }
   
    public function index()
    {
         $cursos = App\Cursos::orderBy('id','DESC')->paginate(4);
		return view('cursos.index',compact('cursos'));
    }

    public function create()
    {
        $resp = App\Responsabls::all();
		return view('cursos/new',compact('resp'));		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        if(isset($_POST['btnsave'])){
				$request->validate([ 'title' => 'required']);
				$NewCurso = new App\Cursos;				
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
				
				
				$ult = App\Cursos::all();
				$CursoUlt = $ult->last(); 
			if ($request->cant_resps == 1){
				$New = new App\Curso_resps;  
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
					 $ArrayResp = App\Responsabls::where('id','=',$ArrayIdResp[$j])->first();
					  $New = new App\Curso_resps;  					 
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
        $resp = App\Responsabls::all();
		$edit = App\Cursos::findOrFail($id);
		return view('cursos/EditCurs',compact('edit','resp'));
    }
    
    
    
    
    
    
    

    public function update(Request $request, $id) {
    
                  
			if(isset($_POST['btnsave'])){   
				
			$request->validate([ 'title' => 'required']);
			$update = App\Cursos::findOrFail($id);  
				  
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
			

			$BuscResp = App\Curso_resps::where('curso_id','=',$update->id )->get();  		
			$Num = $BuscResp->count();
			if (isset($BuscResp) and $Num > 0){
				for($i=1; $i<=$Num; $i++){ 
					$Eliminar= App\Curso_resps::where('curso_id','=',$update->id )->first();
					$Eliminar->delete();  								    	
			     }
			}  				
			if ($request->cant_resps == 1){  
				$request->validate([ 'resp' => 'required']); 				
				$New = new App\Curso_resps;  
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
					 $ArrayResp = App\Responsabls::where('id','=',$ArrayIdResp[$j])->first();
					  $New = new App\Curso_resps;  					 
					  $New->curso_id = $update->id;					  
					  $New->resp_id = $ArrayResp->id;
					  $New->save();
				 } 
			}	 
			  			
		return redirect()->route('cursos')->with('mensaje','Curso Actualizado');
		}
		
	return redirect()->route('cursos');
	}

 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    public function destroy($id)
    {
        //
    }
    
    
		
		
		
		
		
		
		
}
