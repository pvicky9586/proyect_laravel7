<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Participants;
use App\Cursos;
use Auth;


class ParticipantsComponent extends Component
{
	
	 use WithPagination;
	  
	public $part_id, $cedula, $name, $last_name, $id_curso, $Met_pago, $pago, $email, $telef, $NroWp;
	
	public $view = 'create';
	public $searchPart = '';
	public $part, $mensaje;
	
    public function render()
    {
		$cursos= Cursos::all();
       return view('livewire.participants-component',compact('cursos'), [
		'parts'=> Participants::where(function($sub_query)
		{
			$sub_query->where('name','like', '%'.$this->searchPart.'%')
			->orWhere('last_name','like', '%'.$this->searchPart.'%');
			})->orderBy('id','desc')->simplepaginate(10) 
		]);
		
		
    }
     public function verif(){    		  
		   $part = Participants::where('cedula','=',$this->cedula)->first();
		   if ($part)  {
			    $this->edit($part->id);  
			    $this->view = 'edit';
			    return back()->with('mensaje','Datos Registrados');	
			}
			
	}
	  
     public function store() {
		$this->validate(['cedula' => 'required']);
		 if ($this->email){
			   $this->validate([ 'email' => 'email']);  			 
		 }
		                                           
		$part = Participants::create([
		'cedula' => $this->cedula,
		'name' => $this->name,	
		'last_name' => $this->last_name,
		
		'id_curso' => $this->id_curso,
		'Met_pago' => $this->Met_pago,
		'pago' => $this->pago,
		
		'email' => $this->email,
		'telef' => $this->telef,                                          
		'NroWp' => $this->NroWp,
		'user_created' => Auth::user()->id
		]);  		 
			//vaciar los campos
			//$this->cedula = '';
			//$this->name= '';
			//$this->last_name= '';
		$this->default();
		return back()->with('mensaje','Datos Registrados');			
	}
                                                                
     
     
     
     
     public function edit($id){
		$part= Participants::find($id);
		$this->part_id	= $part-> id; 
		$this->cedula = $part->cedula;
		$this->name = $part->name;
		$this->last_name = $part->last_name; 
		
		if ($part->id_curso){
			$curs= Cursos::find($part->id_curso);  
			$this->id_curso = $curs->title; 
		} 
						
		$this->id_curso = $part->id_curso; 		
		$this->Met_pago =$part->Met_pago;           
		$this->pago = $part->pago;
		
		$this->email = $part->email;
		$this->telef = $part->telef;
		$this->NroWp = $part->NroWp;		
		$this->view = 'edit';		
	} 
	
	   public function update(){
		$this->validate(['cedula' => 'required']);
		$part = Participants::find($this->part_id); 		
		$part->update([
			'cedula' => $this->cedula,
			'name' => $this->name,
			'last_name' => $this->last_name,
			'id_curso' => $this->id_curso, 		
			'Met_pago' => $this->Met_pago,
			'pago' => $this->pago,
			'email' => $this->email,
			'telef' => $this->telef,
			'NroWp' => $this->NroWp,
			'user_updated' => Auth::user()->id
		]);
		$this->default(); 
		return back()->with('mensaje','Datos Actualizados');	
	}
	
     
	
   public function destroy ($id){
		Participants::destroy($id);  
	}
	
	public function default(){
		$this->cedula = '';
		$this->name = '';			
		$this->last_name = '';
		$this->id_curso = '';
		$this->Met_pago = '';
		$this->pago = '';
		$this->email = '';
		$this->telef = '';
		$this->NroWp = '';
		$this->view = 'create';		
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
}
