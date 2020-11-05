@extends('layouts.appAuth')
@section('title','- Usuarios ')
@section('content')

<div class="title" ><b>Responsabls</b></div> 
	    <div align="right">
			<a href="{{ route('AdmUser') }}"  ><img src="{{ asset('images/irAtras.jpg') }}" width="100" height="120"></a>
	     </div>
	
<div class="containe">
	
    <div align="center">@livewire('responsabls-component')</div>
        
</div>     


@endsection
