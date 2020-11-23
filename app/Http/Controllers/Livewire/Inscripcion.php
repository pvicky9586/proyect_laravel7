<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use App\Incription;
use App\Curso;          


class Inscripcion extends Component
{
	
    public function render()
    {
		
		$insc =Incription::all();
		$Total = count($insc);
		$cursos = Curso::all(); 
		
		
		
		return view('livewire.inscripcion',compact('cursos','insc','Total'));
    }
}
