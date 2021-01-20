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
	

    
}










