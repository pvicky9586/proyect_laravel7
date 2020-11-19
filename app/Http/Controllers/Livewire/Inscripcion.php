<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;


class Inscripcion extends Component
{
	public $curso;
    public function render()
    {
		
        return view('livewire.inscripcion');
    }
}
