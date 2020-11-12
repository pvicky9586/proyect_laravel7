@extends('layouts.appLivewire')
@section('title','- Responsabls ')
@section('content')

 
	<div class="title" ><b>Responsabl's</b></div> 
	    <div align="right">
			<a href="{{ route('AdmUser') }}"  ><img src="{{ asset('images/irAtras.jpg') }}" width="100" height="120"></a>
	     </div>	
    <div>
		@livewire('responsabls-component')
	</div>


	<div align="center" >
		<h1 style="margin-top:30%;">Debe iniciar seccion</h1>
		<a href="{{ route('login')}}">click aqui</a>  
 	</div>
@endsection
