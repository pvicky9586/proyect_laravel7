@extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')
<div style="display: flex;" align="center" >
	<div class="title" style=" padding-left: 10%;" >
		<b>Cursos </b>
	</div>
	<div align="center" class="nota-curs">
		<label >Esta hoja que se abre lleva impresa tu nombre y el mío, con la
		intención podamos surcar sin líneas no delineadas pero si contenidas.
		Más que un material para ser visualizado y revisado, nos motiva la
		circunstancia de la utilidad que puedas obtener del mismo. Hazlo tuyo,
		y siéntelo con la fuerza que brinda el camino para que le transites sin
		temor alguno.</label>
	</div>
</div>
 <div class="container">  
	@livewire('menu-cursos-inscripcion')
<!--ERROR FATAL Undefined property: Livewire\CompilerEngineForIgnition::$files  -->
</div> 

@endsection
