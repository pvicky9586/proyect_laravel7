<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Participants;
use Auth;


class ParticipantsComponent extends Component
{
	
	 use WithPagination;
	  
	public $part_id, $cedula, $name, $last_name, $email, $telef, $NroWp;
	public $view = 'create';
	public $searchPart = '';
	
    public function render()
    {
       return view('livewire.participants-component', [
		'parts'=> Participants::where(function($sub_query)
		{
			$sub_query->where('name','like', '%'.$this->searchPart.'%')
			->orWhere('last_name','like', '%'.$this->searchPart.'%');
			})->orderBy('id','desc')->simplepaginate(10) 
		]);
		
		
    }
    
     public function store() {
		$this->validate(['cedula' => 'required']);
		 if ($this->email){
			   $this->validate([ 'email' => 'email']);  			 
		 }
		 
		$resps = Participants::create([
		'cedula' => $this->cedula,
		'name' => $this->name,	
		'last_name' => $this->last_name,
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
		$this->email = '';
		$this->telef = '';
		$this->NroWp = '';
		$this->view = 'create';		
	}
    
    
    
    
    
    
    
    
    
    
    
    
    
}
