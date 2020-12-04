@extends('layouts.appAuth')
@section('title','- Inscription ')
@section('content')

<div class="title" ><b>Inscription's</b></div> 
	    <div align="right">
			<a href="{{ route('AdmUser') }}"  ><img src="{{ asset('images/irAtras.jpg') }}" width="100" height="120"></a>
	     </div>
	
<div class="toll">
	
    <div>@livewire('inscription-comp')</div>
        
</div>     


@endsection
