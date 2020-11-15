<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Participants;
use App\Cursos;
use App\Incripcion;
use App\Incripcion_pago;
use Auth;


class ParticipantsComponent extends Component
{
	
	 use WithPagination;
	  
	public $part_id, $cedula, $name, $last_name, $id_curso, $meth_pago, $pago, $email, $telef, $NroWp, $id_part;
	
	public $view = 'create';
	public $searchPart = '';
	public $part, $mensaje;
	public $InscCurs, $InscPart;
	
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
		 'email' => $this->email,
		'telef' => $this->telef,                                          
		'NroWp' => $this->NroWp		
		]);
		
		$Buscpart = Participants::where('cedula','=',$this->cedula)->first();
		
		
		$insc= Incripcion::create([
		'id_part' => $Buscpart->id,		
		'id_curso' => $this->id_curso
		]);
		
		$pago = Incripcion_pago::create([
		'id_curso' => $this->id_curso,
		'id_part' => $Buscpart->id,
		'meth_pago' => $this->meth_pago,
		'pago' => $this->pago 		
		]);  		 
			
		$this->default();
		return back()->with('mensaje','Datos Registrados');			
	}
                                                                
     
     
     
     
    public function edit($id){
		$part= Participants::find($id);
		
		$this->part_id	= $part-> id; 
		$this->cedula = $part->cedula;
		$this->name = $part->name;
		$this->last_name = $part->last_name;  		
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
			'email' => $this->email,
			'telef' => $this->telef,
			'NroWp' => $this->NroWp
		]); 

		//$InscPart = Incripcion::get->($this->part_id);
		
		
		  //if ($InscCurs->id == $InscPart->id){
			  //$Insc = Incripcion ::find($InscPart->id);
			  //$Insc->update([
			   //'id_curso' => $this->id_curso
			   //]);
			   			  
		  //}	
		
			// 		
			//'meth_pago' => $this->meth_pago,
			//'pago' => $this->pago,
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
