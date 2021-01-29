<?php
//Desd Admin

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use Livewire\WithFileUploads;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;



use App\Incription;
use App\Curso;
use App\Participant;
use Auth;


//Desd Admin
class InscriptionComp extends Component
{

	use WithPagination;

	public $title, $curso_id, $description, $duracion;
	public $ver, $valid, $exp;
	public $inscs, $parts, $conf=[], $Marc;
	public $CursSelec, $ins;
	


   public function render()
    {
        return view('livewire.inscription-comp',[
        	'cursos' => Curso::withCount(['inscs'])->get()
    	]);

    }

	  function mount(){
		$inscs = Incription::all();
    	$this->inscs = $inscs;
    	$parts = Participant::all();
    	$this->parts = $parts;		
	}
	  
 //    public function store() {
			
	// }
     



 // public function export()
 //    {

 //    	$parts = Participant::all();
 //    	$pdfContent = PDF::loadView('pdf-prof', $parts)->output();
 //    	$this->parts = $parts;
 //    	return response()->streamDownload(
 //    		fn() => print($pdfContent), 'pdf.pdf');
 //    	)

 //    	//return response()->download(storage_path('pdf'));
 //    }







   public function ConfSave() {
  //   	$Marc = Count($this->conf);
  //   	//$this->Marc= $Marc;
  //   	for($i=0; $i<$Marc; $i++){
  //   		$ins = Incription::find($this->conf[$i]);
  //       	$ins->update([
		// 		'conf' => 1
		// 	]); 

  //   	}
  //   	$this->valid = '';
  //   	$this->ver = '';

		// return back()->with('mensaje','Lista Actualizada');	
  //   }
		$this->ver = '';
 	 	$this->valid = '';
		return back()->with('mensaje','Lista Actualizada');	
}

    public function ConfIns($id) { //ver Inscritos/aspirantes
    	$this->valid = 1;
    	$this->ver = '';  
    	$CursSelec = Curso::find($id);
    	$this->CursSelec = $CursSelec;
			
	}


     
 // 	public function show($id){

 // 		$this->ver = 1;
 // 		$this->valid = '';
	// 	$curs = Curso::find($id);
	// 	$this->title = $curs->title; 
	// 	$this->description = $curs->description; 		
	// 	$this->duracion = $curs->duracion; 	
	// } 
	
		public function pdf($id){
			$this->ver = '';
 	 		$this->valid = '';
		return back()->with('mensaje','Lista Actualizada');	
	} 
	
    
    
    
    
    
    
    
    
    
    
    
    
}
