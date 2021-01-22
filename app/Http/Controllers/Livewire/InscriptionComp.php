<?php
//Desd Admin

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Incription;
use App\Curso;
use App\Participants;
use Auth;
//Desd Admin
class InscriptionComp extends Component
{

	use WithPagination;

	public $title, $curso_id;
	
   public function render()
    {
        return view('livewire.inscription-comp',[
        	'cursos' => Curso::withCount(['inscs'])->get()
    	]);

    }

	  
	  
    public function store() {
			
	}
                                                                
     
     
     
     
 //    public function edit($id){
	// 	$curs = Curso::find($id);
	// 	$this->curso_id	= $curs->id;
	// 	$this->title = $curs->title; 		
	// } 
	
	
	
	public function update(){
		
	}
	
     
	
   public function destroy ($id){
		Participant::destroy($id);  
	}
	
	public function default(){
		
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
}
