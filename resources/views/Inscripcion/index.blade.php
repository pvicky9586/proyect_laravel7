@extends('layouts.appAuth')
@section('title','- Inscripcion')
@section('content')

<div class="title" ><b>Inscripcion</b></div> 
	    <div align="right">
			<a href="{{ route('AdmUser') }}"  ><img src="{{ asset('images/irAtras.jpg') }}" width="100" height="120"></a>
	     </div>
	
<div class="toll">
	
    <div>@livewire('inscripcion')</div>
        
</div>     


@endsection
