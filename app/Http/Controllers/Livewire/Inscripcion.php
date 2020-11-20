<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use App\Incripcion;
use App\Cursos;          


class Inscripcion extends Component
{
	
    public function render()
    {
		$insc = Incripcion::simplepaginate(10);
		$cursos = Cursos::all();
		$inscTotal =Incripcion::all();
		$Total = count($inscTotal);
		 //$cont = 0;
		//for (i=0; $i<=$Total; $i++ ){
			
			//for (i=0; $i<=$Total; $i++){
			    				
			//}
			
			
		//}
		
		return view('livewire.inscripcion',compact('insc','cursos','Total'));
		
    }
}
