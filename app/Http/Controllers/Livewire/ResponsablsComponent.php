<?php
namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Responsabl;
use App\Profession;
use Auth;
 
//Desd Admin   
class ResponsablsComponent extends Component
{
	 use WithPagination;
	
	public $resp_id, $cedula, $name, $last_name, $email, $telef, $NroWp, $profession_id='';
	public $view = 'create';
	public $searchResp = '';
	public $resp, $mensaje;
	public $professions;

	function mount(){
		$professions=Profession::all();
			$this->professions=$professions;
			
	}


    public function render()
    {
    	
		 //$profiles=Profession:all();
		return view('livewire.responsabls-component',[			
			'resps'=> Responsabl::where(function($sub_query)
			{
			$sub_query->where('name','like', '%'.$this->searchResp.'%')
				->orWhere('last_name','like', '%'.$this->searchResp.'%');
				})->orderBy('id','desc')->paginate(10) 
		]);
     }
     
    public function verif(){    		  
	   $resp = Responsabl::where('cedula','=',$this->cedula)->first();
	   if ($resp)  {
		    $this->edit($resp->id);  
		    $this->view = 'edit';
		    return back()->with('mensaje','Datos Registrados');	
		}
			
	}
     
     public function store() {
		$this->validate(['cedula' => 'required']);
		 if ($this->email){
			  $this->validate([ 'email' => 'email']);  			 
			}	
		$resps = Responsabl::create([
		'cedula' => $this->cedula,
		'name' => $this->name,	
		'last_name' => $this->last_name,
		'email' => $this->email,
		'telef' => $this->telef,
		'NroWp' => $this->NroWp,
		'profession_id' => $this->profession_id,
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
		$resp= Responsabl::find($id); 
		$this->resp_id	= $resp->id;
		$this->profession_id	= $resp->profession_id;
		$this->cedula = $resp->cedula;
		$this->name = $resp->name;
		$this->last_name = $resp->last_name;
		$this->email = $resp->email;
		$this->telef = $resp->telef;
		$this->NroWp = $resp->NroWp;
		$this->view = 'edit';		
	} 
	
	public function update(){
		$this->validate(['cedula' => 'required']);
		$resp = Responsabl::find($this->resp_id); 	
		
		$resp->update([
			'cedula' => $this->cedula,
			'name' => $this->name,
			'last_name' => $this->last_name,
			'email' => $this->email,
			'telef' => $this->telef,
			'NroWp' => $this->NroWp,
			'profession_id' => $this->profession_id,
			'user_updated' => Auth::user()->id
		]);
		$this->default(); 
		return back()->with('mensaje','Datos Actualizados');	
	}
	
     
	
   public function destroy ($id){
		Responsabl::destroy($id);  
	}
	
	
	
	public function default(){
		$this->cedula = '';
		$this->name = '';			
		$this->last_name = '';
		$this->email = '';
		$this->telef = '';
		$this->NroWp = '';
		$this->profile='';
		$this->view = 'create';		
	}
	

    
}
