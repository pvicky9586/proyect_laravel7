@extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')
<div class="title" ><b>Cursos </b></div>

 <div class="container">  
	@livewire('menu-cursos-inscripcion')
<!--ERROR FATAL Undefined property: Livewire\CompilerEngineForIgnition::$files  -->
</div> 

@endsection
