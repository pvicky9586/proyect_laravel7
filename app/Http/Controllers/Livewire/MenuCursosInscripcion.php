<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Curso;
use App\Comment;


class MenuCursosInscripcion extends Component
{
	use WithPagination;
	 
	//public $cedula, $name;
	
	public $name, $email, $comment, $curso_id;
	public $comments;

	function mount(){
		$comments=Comment::all();
			$this->comments=$comments;
	}

    public function render()
    {    
		return view('livewire.menu-cursos-inscripcion',[
          'cursos'=>Curso::where('statud', '=', 1)->orderBy('id','desc')->paginate(4) 
		]);
    }
    

   //public function store() {   		                                           
		//$part = Participants::create([
		//'cedula' => $this->cedula,
		//'name' => $this->name				
	//}
	
    public function comment()
 	{
 	 
 		$this->validate([ 'name' => 'required', 'email' => 'required|email', 'comment' => 'required']);	
 		                                      
		$SaveCom = Comment::create([
		'name' => $this->name,
		'email' => $this->email,	
		'comment' => $this->comment,
		'curso_id' => $this->curso_id	
		]);
		$this->default();
		return redirect()->route('MenuCursos');
		
 		
 	}


	public function default(){
		$this->name = '';
		$this->email = '';			
		// $this->last_name = '';
		// $this->id_curso = '';
		// $this->Met_pago = '';
		// $this->pago = '';
		// $this->email = '';
		// $this->telef = '';
		// $this->NroWp = '';
		// $this->view = 'create';		
	}
    
    
}










