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
	public $ver, $valid;
	public $inscs, $parts, $insc_id=[], $Marc;
	public $CursSelec;
	//public $inscSelec, $confir;

	


   public function render()
    {
        return view('livewire.inscription-comp',[
        	'cursos' => Curso::withCount(['inscs'])->simplepaginate(10) 
    	]);


    }

	  function mount(){
		$inscs = Incription::all();
    	$this->inscs = $inscs;
    	$parts = Participant::all();
    	$this->parts = $parts;		
	}
	  






  

    public function ConfIns($id) { //ver Inscritos/aspirantes
    	$this->valid = 1;
    	$this->ver = '';  
    	$CursSelec = Curso::find($id);
    	$this->CursSelec = $CursSelec;
			
	}






	public function conf($id) { //Save confir 

		//$this->confir=$this->conf;
		// $CursSelec = Incription::where('curso_id',$CursSelec);
		
    	 $cont_insc = Count($this->insc_id);

    	$this->CursSelec = $CursSelec;

    	// $this->insc=$this->insc_id;
      for($i=0; $i<$cont_insc; $i++){
         	//$this->confir = $this->insc_id[$i];	
		    $inscSelec = Incription::find($this->insc_id[$i]);
		   	$inscSelec->conf = 1;
			$inscSelec->save();	

		    if(Auth::user()){
			$inscSelec->user_conf = Auth::user()->id;
			$inscSelec->save();		
			}
		
            //$this->inscSelec = $inscSelec;	
           
       }
       $this->valid = 1;
    	return back()->with('conf','confirmado');	
	}














	public function ConfSavePDF() {
		
	}




	
	public function ver($id){
			$this->ver = 1;
 	 		$this->valid = '';
 	 		$CursSelec = Curso::find($id);
    		$this->CursSelec = $CursSelec;
    		//return back()->with('mensaje','Lista Actualizada');	
	} 

	 public function destroy($id){	 
		$insc= Incription::destroy($id); 
		$this->valid = 1;
    	 return back()->with('alert','Borrado de la lista');

	}
	
    
    
    
    
    
    
    
    
    
    
    
    
}
